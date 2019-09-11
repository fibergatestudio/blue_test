{!! view_render_event('bagisto.shop.layout.header.category.before') !!}

<?php

$categories = [];

foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id) as $category) {
    if ($category->slug)
        array_push($categories, $category);
}

?>

<category-nav categories='@json($categories)' url="{{url()->to('/')}}"></category-nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/MainPage') }}">Main Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Online Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/coffeesubscription') }}">Coffee Subscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/bluebox') }}">Blue Box</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contacts') }}">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/basketbox') }}">Basket/Box</a>
      </li>

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/products/supertest') }}">TestProduct</a>
      </li>
    </ul>
  </div>
</nav>

{!! view_render_event('bagisto.shop.layout.header.category.after') !!}


@push('scripts')


<script type="text/x-template" id="category-nav-template">

    <ul class="nav">
        <category-item
            v-for="(item, index) in items"
            :key="index"
            :url="url"
            :item="item"
            :parent="index">
        </category-item>
    </ul>

</script>

<script>
    Vue.component('category-nav', {

        template: '#category-nav-template',

        props: {
            categories: {
                type: [Array, String, Object],
                required: false,
                default: (function () {
                    return [];
                })
            },

            url: String
        },

        data: function(){
            return {
                items_count:0
            };
        },

        computed: {
            items: function() {
                return JSON.parse(this.categories)
            }
        },
    });
</script>

<script type="text/x-template" id="category-item-template">
    <li>
        <a :href="url+'/categories/'+this.item['translations'][0].slug">
            @{{ name }}&emsp;
            <i class="icon dropdown-right-icon" v-if="haveChildren && item.parent_id != null"></i>
        </a>

        <i :class="[show ? 'icon icon-arrow-down mt-15' : 'icon dropdown-right-icon left mt-15']"
        v-if="haveChildren"  @click="showOrHide"></i>

        <ul v-if="haveChildren && show">
            <category-item
                v-for="(child, index) in item.children"
                :key="index"
                :url="url"
                :item="child">
            </category-item>
        </ul>
    </li>
</script>

<script>
    Vue.component('category-item', {

        template: '#category-item-template',

        props: {
            item:  Object,
            url: String,
        },

        data: function() {
            return {
                items_count:0,
                show: false,
            };
        },

        mounted: function() {
            if(window.innerWidth > 770){
                this.show = true;
            }
        },

        computed: {
            haveChildren: function() {
                return this.item.children.length ? true : false;
            },

            name: function() {
                if (this.item.translations && this.item.translations.length) {
                    this.item.translations.forEach(function(translation) {
                        if (translation.locale == document.documentElement.lang)
                            return translation.name;
                    });
                }

                return this.item.name;
            }
        },

        methods: {
            showOrHide: function() {
                this.show = !this.show;
            }
        }
    });
</script>


@endpush