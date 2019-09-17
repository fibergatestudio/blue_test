@inject ('attributeRepository', 'Webkul\Attribute\Repositories\AttributeRepository')

<div style="position: initial;" class="layered-filter-wrapper sidebar"> <!-- sidebar -->

    {!! view_render_event('bagisto.shop.products.list.layered-nagigation.before') !!}

    <layered-navigation></layered-navigation>

    {!! view_render_event('bagisto.shop.products.list.layered-nagigation.after') !!}

</div>

@push('scripts')
    <script type="text/x-template" id="layered-navigation-template">
        <div>

            <!-- <div style="border-bottom:none;" class="filter-title">
                {{ __('shop::app.products.layered-nav-title') }}
            </div> -->

            <div class="filter-content">

                <div class="filter-attributes">

                    <filter-attribute-item v-for='(attribute, index) in attributes' :attribute="attribute" :key="index" :index="index" @onFilterAdded="addFilters(attribute.code, $event)" :appliedFilterValues="appliedFilters[attribute.code]">
                    </filter-attribute-item>

                </div>
            </div>
        </div>
    </script>

    <script type="text/x-template" id="filter-attribute-item-template">



        <div style="border-bottom:none;" class="filter-attributes-item filters__category" :class="[active ? 'active' : '']">

                <!-- <aside style="padding-top:150px;" class="sidebar" id="sidebar">
                    <div class="filters">
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Roast
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="roastOption0" type="checkbox" name="roast">
                                        <label class="input-checkbox__label" for="roastOption0">LIGHT</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="roastOption1" type="checkbox" name="roast">
                                        <label class="input-checkbox__label" for="roastOption1">MEDIUM</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="roastOption2" type="checkbox" name="roast">
                                        <label class="input-checkbox__label" for="roastOption2">DARK</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside> -->


            <div class="filter-attributes-title filters__title" @click="active = !active">
                @{{ attribute.name ? attribute.name : attribute.admin_name }}

                <div class="pull-right">
                    <span class="remove-filter-link" v-if="appliedFilters.length" @click.stop="clearFilters()">
                        {{ __('shop::app.products.remove-filter-link-title') }}
                    </span>

                    <i class="icon" :class="[active ? 'arrow-up-icon' : 'arrow-down-icon']"></i>
                    <!-- <svg>
                        <use xlink:href="#arrow-down"></use>
                    </svg> -->
                </div>
            </div>

            <div class="filter-attributes-content">

                <ol class="items" v-if="attribute.type != 'price'">
                    <li class="item input-checkbox filters__checkbox" v-for='(option, index) in attribute.options'>

                        <span class="checkbox input-checkbox__label">
                            <input type="checkbox" :id="option.id" v-bind:value="option.id" v-model="appliedFilters" @change="addFilter($event)"/>
                            <label class="checkbox-view" :for="option.id"></label>
                            @{{ option.label ? option.label : option.admin_name }}
                        </span>

                    </li>
                </ol>

                <div class="price-range-wrapper" v-if="attribute.type == 'price'">
                    <vue-slider
                        ref="slider"
                        v-model="sliderConfig.value"
                        :process-style="sliderConfig.processStyle"
                        :tooltip-style="sliderConfig.tooltipStyle"
                        :max="sliderConfig.max"
                        :lazy="true"
                        @callback="priceRangeUpdated($event)"
                    ></vue-slider>
                </div>

            </div>

        </div>
    </script>

    <script>
        Vue.component('layered-navigation', {

            template: '#layered-navigation-template',

            data: function() {
                return {
                    attributes: @json($attributeRepository->getFilterAttributes()),
                    appliedFilters: {}
                }
            },

            created: function () {
                var urlParams = new URLSearchParams(window.location.search);

                //var entries = urlParams.entries();

                //for (let pair of entries) {
                    //this.appliedFilters[pair[0]] = pair[1].split(',');
                //}

                var this_this = this;

                urlParams.forEach(function (value, index) {
                    this_this.appliedFilters[index] = value.split(',');
                });
            },

            methods: {
                addFilters: function (attributeCode, filters) {
                    if (filters.length) {
                        this.appliedFilters[attributeCode] = filters;
                    } else {
                        delete this.appliedFilters[attributeCode];
                    }

                    this.applyFilter()
                },

                applyFilter: function () {
                    var params = [];

                    for(key in this.appliedFilters) {
                        params.push(key + '=' + this.appliedFilters[key].join(','))
                    }

                    window.location.href = "?" + params.join('&');
                }
            }
        });

        Vue.component('filter-attribute-item', {

            template: '#filter-attribute-item-template',

            props: ['index', 'attribute', 'appliedFilterValues'],

            data: function() {
                return {
                    appliedFilters: [],

                    active: false,

                    sliderConfig: {
                        value: [
                            0,
                            0
                        ],
                        max: 500,
                        processStyle: {
                            "backgroundColor": "#FF6472"
                        },
                        tooltipStyle: {
                            "backgroundColor": "#FF6472",
                            "borderColor": "#FF6472"
                        }
                    }
                }
            },

            created: function () {
                if (!this.index)
                    this.active = true;

                if (this.appliedFilterValues && this.appliedFilterValues.length) {
                    this.appliedFilters = this.appliedFilterValues;

                    if (this.attribute.type == 'price') {
                        this.sliderConfig.value = this.appliedFilterValues;
                    }

                    this.active = true;
                }
            },

            methods: {
                addFilter: function (e) {
                    this.$emit('onFilterAdded', this.appliedFilters)
                },

                priceRangeUpdated: function (value) {
                    this.appliedFilters = value;

                    this.$emit('onFilterAdded', this.appliedFilters)
                },

                clearFilters: function () {
                    if (this.attribute.type == 'price') {
                        this.sliderConfig.value = [0, 0];
                    }

                    this.appliedFilters = [];

                    this.$emit('onFilterAdded', this.appliedFilters)
                }
            }

        });

    </script>
@endpush