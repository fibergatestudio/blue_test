<?php
    $relatedProducts = $product->related_products()->get();
?>

@if ($relatedProducts->count())

            @foreach ($relatedProducts as $related_product)

                @include ('shop::products.list.card', ['product' => $related_product])

            @endforeach

@endif