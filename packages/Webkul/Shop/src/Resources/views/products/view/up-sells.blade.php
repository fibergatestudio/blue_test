{!! view_render_event('bagisto.shop.products.view.up-sells.after', ['product' => $product]) !!}

<?php
    $productUpSells = $product->up_sells()->get(); 
?>

@if ($productUpSells->count())

            @foreach ($productUpSells as $up_sell_product)

                @include ('shop::products.list.card', ['product' => $up_sell_product])

            @endforeach

@endif

{!! view_render_event('bagisto.shop.products.view.up-sells.after', ['product' => $product]) !!}