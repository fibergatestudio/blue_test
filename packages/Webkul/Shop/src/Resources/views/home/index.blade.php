@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.home.page-title') }}
@endsection

@section('content-wrapper')

    @inject ('productRepository', 'Webkul\Product\Repositories\ProductRepository')
    @inject ('attributeRepository', 'Webkul\Attribute\Repositories\AttributeRepository')

    <?php 

    //dd($slug);


    // if(!empty($slug)){
    //     if($slug == 'coffee-machines'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getCoffeeMachines();
    //     } else if($slug == 'coffee'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getCoffee();
    //     } else if($slug == 'flavored'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getFlavored();
    //     } else if($slug == 'barista-tools'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getBaristaTools('3');
    //     } else if($slug == 'coffee-accessories'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getCoffeeAccessories();
    //     }else {
    //         $atributes = $attributeRepository->getFilterAttributes();
    //     }

    // } else {

    //     $atributes = $attributeRepository->getFilterAttributes();

    // }

    //   if(!empty($slug)){
    //     if($slug == 'coffee-machines'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getFam('3');
    //     } else if($slug == 'coffee'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getFam('1');
    //     } else if($slug == 'flavored'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getFam('5');
    //     } else if($slug == 'barista-tools'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getFam('7');
    //     } else if($slug == 'coffee-accessories'){
    //         //DB::table('attributes')->where('is_filterable', 1)->with('options')->get();
    //         $atributes = $attributeRepository->getFam('6');
    //     }else {
    //         $atributes = $attributeRepository->getFam('0');
    //     }

    // } else {

    //     $atributes = $attributeRepository->getFam('0');

    // }

    if ( \Request::is('filter')  ){
        $atributes = $attributeRepository->getFilterAttributes();
    } else {
        $atributes = $attributeRepository->getFam($attri_name);
        foreach($categories as $cat){
            if($cat->slug == $slug){
                echo $cat->slug;
            }
        }
    }


    ?>



<div class="page page_has-filter">
                <!-- *** Filters BEGIN *** -->
                <aside class="sidebar" id="sidebar">
                    <div class="filters">

                    <?php if ( \Request::is('categories/*')  ) { ?>
                        <form id="form" action="{{ url('categories/'. $category->slug.'/filter') }}" method="GET">
                    <?php } else { ?>
                        <form id="form" action="{{ url('/filter') }}" method="POST">
                    <?php } ?>
                    @csrf()
                    
                    @foreach($atributes as $atr)

                        <div class="filters__category">
                            <div role="button" class="filters__title" tabindex="0" aria-label="Show/hide category">{{ $atr->admin_name }}
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                            @foreach ($atr->options as $option)
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="atr{{ $option->id }}" type="checkbox" name="atr[]" value="{{ $option->admin_name }}" 
                                        @if(!empty($filter))

                                            @foreach($filter as $filt)

                                                @if($filt == $option->admin_name) 

                                                checked 

                                                @endif

                                            @endforeach

                                        @endif

                                        >
                                        <label class="input-checkbox__label" for="atr{{ $option->id }}">{{ $option->admin_name }}</label>
                                    </div>
                                </li>
                               
                            @endforeach
                            </ul>
                        </div>

                        @endforeach
                    </form>

                    <!-- <div class="filters__category">
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
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Type
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="typeOption0" type="checkbox" name="type">
                                        <label class="input-checkbox__label" for="typeOption0">SINGLE ORIGIN</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="typeOption1" type="checkbox" name="type">
                                        <label class="input-checkbox__label" for="typeOption1">BLEND</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="typeOption2" type="checkbox" name="type">
                                        <label class="input-checkbox__label" for="typeOption2">ESPRESSO</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Tasting Notes
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption0" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption0">CHOCOLATE</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption1" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption1">CITRUS</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption2" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption2">FRUITY</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption3" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption3">EARTHY</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Origin
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="originOption0" type="checkbox" name="origin">
                                        <label class="input-checkbox__label" for="originOption0">AFRICA</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="originOption1" type="checkbox" name="origin">
                                        <label class="input-checkbox__label" for="originOption1">LATIN AMERICA</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="originOption2" type="checkbox" name="origin">
                                        <label class="input-checkbox__label" for="originOption2">ASIA &amp; PACIFIC</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Processing
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="processingOption0" type="checkbox" name="processing">
                                        <label class="input-checkbox__label" for="processingOption0">FULLY WASHED</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="processingOption1" type="checkbox" name="processing">
                                        <label class="input-checkbox__label" for="processingOption1">FULL NATURAL</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="processingOption2" type="checkbox" name="processing">
                                        <label class="input-checkbox__label" for="processingOption2">HONEY</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="processingOption3" type="checkbox" name="processing">
                                        <label class="input-checkbox__label" for="processingOption3">PULPED NATURAL</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="processingOption4" type="checkbox" name="processing">
                                        <label class="input-checkbox__label" for="processingOption4">SEMI-WASHED</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="processingOption5" type="checkbox" name="processing">
                                        <label class="input-checkbox__label" for="processingOption5">SUSTAINABLY SOURCED</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="processingOption6" type="checkbox" name="processing">
                                        <label class="input-checkbox__label" for="processingOption6">ORGANIC</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Decaf
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="decafOption0" type="checkbox" name="decaf">
                                        <label class="input-checkbox__label" for="decafOption0">REGULAR</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="decafOption1" type="checkbox" name="decaf">
                                        <label class="input-checkbox__label" for="decafOption1">DECAFFEINATED</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Grind
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="grindOption0" type="checkbox" name="grind">
                                        <label class="input-checkbox__label" for="grindOption0">AVAILABLE GROUND</label>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    
                        <!-- <div style="display:none;" class="filters__view-more">
                            <button class="button button_blue">View items</button>
                        </div> -->
                    </div>
                </aside>
                <!-- *** Filters END *** -->
                <div style="min-height: 1600px;" class="page__content">
                    <div class="container page__container page__container_catalog">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="{{ url('/categories/coffee') }}">Shop</a>
                            </li>
                        </ul>
                        <div class="catalog">
                            <?php if ( \Request::is('filter')  ) { ?>

                            <?php } else { ?>
                                  <select class="control js-init-styleselect" onchange="location = this.value;">
                                    @foreach ($categories as $cat)
                                        @if($cat->name == 'Root')

                                        @elseif($cat->slug == $slug)
                                        <option class="quantity control-group product-card__quantity" value="{{ url('/categories/'.$cat->slug) }}" selected><a href="{{ url('/categories/'.$cat->slug) }}">{{$cat->name}}</a></option>

                                        @else
                                        <option class="quantity control-group product-card__quantity" value="{{ url('/categories/'.$cat->slug) }}"><a href="{{ url('/categories/'.$cat->slug) }}">{{$cat->name}}</a></option>
                                        @endif
                                    @endforeach
                                </select>
                            <?php } ?>

                            <div class="catalog__category">
                            <?php if ( \Request::is('filter')  ) { ?>
                                <h1 class="catalog__results">Search: <span class="result">
                                <?php } else { ?>
                                <h1 class="catalog__results">Category: <span class="result">
                                @foreach ($categories as $cat)
                                    @if($cat->slug == $slug)
                                        {{ $cat->name }}
                                    @else
                                        
                                    @endif
                                @endforeach
                                    <?php } ?>

                      <div class="result__icon">
                        <svg>
                          <use xlink:href="#arrow-down"></use>
                        </svg>
                      </div></span>
                                </h1>
                                <div class="catalog__search search">
                                    <form action="{{ url('/filter') }}" class="search__field" method="POST">
                                    @csrf()
                                        <button class="search__button search__button_submit">
                                            <svg>
                                                <use xlink:href="#lens"></use>
                                            </svg>
                                        </button>
                                        <input type="search" name="catalogSearch">
                                    </form>
                                    <button class="search__button catalog__search-trigger">
                                        <svg>
                                            <use xlink:href="#lens"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="catalog__mob-btns">
                                    <button class="catalog__menu-trigger js-box-trigger" data-target-id="sidebar">Filter</button>
                                    <button class="catalog__menu-trigger">Category</button>
                                </div>
                            </div>
                            <div class="catalog__list">
                            <?php if (\Request::is('shop') || \Request::is('filter') ) { ?>
                                    @foreach ($all_prod as $prod)
 
                                            @include ('shop::products.list.maincard', ['product' => $prod])

                                    @endforeach
                            <?php } else { ?>
              
                                    @foreach ($all_prod as $prod)
                                      
                                            @include ('shop::products.list.maincard', ['product' => $prod])
                                      
                                    @endforeach
                             
                            <?php } ?>
                            </div>
                            @if($all_prod->isEmpty())
                            <p>No Search Result!</p>
                            @else
                            
                                @if($prodcount >= 1)
                                    <?php
                                    // config
                                    $link_limit = 14;
                                    ?>

                                    @if ($all_prod->lastPage() > 1)
                                            <div class="catalog__show-more">
                                                <a href="{{ url('/categories/'.$slug.'/filter') }}">
                                                    <button class="button button_blue button_icon">
                                                        <svg>
                                                            <use xlink:href="#update-arrow"></use>
                                                        </svg><span>Show more items</span>
                                                    </button>
                                                </a>
                                            </div>
                                        <ul class="pagination catalog__pagination pagination">
                                            <li class="pagination__item pagination__item_prev {{ ($all_prod->currentPage() == 1) ? ' disabled' : '' }}">
                                                    <a href="{{ $all_prod->url(1) }}">
                                                        <svg>
                                                            <use xlink:href="#arrow-down"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                            @for ($i = 1; $i <= $all_prod->lastPage(); $i++)
                                                <?php
                                                $half_total_links = floor($link_limit / 2);
                                                $from = $all_prod->currentPage() - $half_total_links;
                                                $to = $all_prod->currentPage() + $half_total_links;
                                                if ($all_prod->currentPage() < $half_total_links) {
                                                $to += $half_total_links - $all_prod->currentPage();
                                                }
                                                if ($all_prod->lastPage() - $all_prod->currentPage() < $half_total_links) {
                                                    $from -= $half_total_links - ($all_prod->lastPage() - $all_prod->currentPage()) - 1;
                                                }
                                                ?>
                                                @if ($from < $i && $i < $to)
                                                    <li class="pagination__item pagination__item_number {{ ($all_prod->currentPage() == $i) ? ' pagination__item_current ' : '' }}">
                                                        <a href="{{ $all_prod->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endif
                                            @endfor
                                                <li class="pagination__item pagination__item_next {{ ($all_prod->currentPage() == $all_prod->lastPage()) ? ' disabled' : '' }}">
                                                    <a href="{{ $all_prod->url($all_prod->lastPage()) }}">
                                                        <svg>
                                                            <use xlink:href="#arrow-down"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                        </ul>
                                    @endif
                                @endif

                            @endif
                            
                        </div>
                    </div>
                </div>
</div>

            <!-- <script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script> -->
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

@endsection

@push('scripts')

<script>
    $(document).ready(function(){
        

        $(".input-checkbox__real").click(function(){

            $('#form').submit();
        });

    });


</script>


@endpush