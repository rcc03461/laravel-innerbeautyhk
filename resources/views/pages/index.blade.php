@extends('layouts.app')



@section('content')

    <div class="page-container">


        <main>

            @include('components/menu')


            <section>
                <div class="page-container">
                    <div id="primary" class="content-area">


                        <div class="page-content ">
                            <main id="main" class="site-main">
                                <article id="post-2" class="post-2 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div data-vc-full-width="true" data-vc-full-width-init="true"
                                            data-vc-stretch-content="true"
                                            class="vc_row wpb_row vc_row-fluid vc_custom_1551361776114"
                                            style="position: relative; left: -5px; box-sizing: border-box;">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="simple" id="stockie-shop-grid-5dcd73f1ac850">
                                                            <div class="site-container">

                                                                <div
                                                                    class="woocommerce woo-shop-container bottom-offset product shop-product-type_1">
                                                                    <div
                                                                        class="page-content columns-4 columns-md-4 columns-sm-2">
                                                                        <div class="product-filter">
                                                                            <div class="woocommerce-notices-wrapper">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <ul class="woo_c-products woo-products-slider"
                                                                                data-shop-masonry="&quot;true&quot;"
                                                                                data-lazy-container="true">


                                                                                @foreach ($products as $product)
    {{-- <p>This is user {{ $user->id }}</p> --}}


                                                                                <li class=" masonry-block grid-item product type-product status-publish has-post-thumbnail product_cat-livestyle product_tag-shop product_tag-theme product_tag-wordpress instock sale shipping-taxable purchasable product-type-simple"
                                                                                    data-product-item="true"
                                                                                    data-lazy-item="true">
                                                                                    <div
                                                                                        class="product-content trans-shadow text-center product-hover-2">
                                                                                        <div class="image-wrap">
                                                                                            {{-- <div class="product-buttons">

                                                                                                <div class="prod-hidden-link quickview-link"
                                                                                                    data-product-id="19083">
                                                                                                    <div
                                                                                                        class="btn btn-small quickview-inner open-popup">
                                                                                                        Quickview </div>
                                                                                                </div>
                                                                                            </div> --}}


                                                                                            <span class="brand-bg-color woo-onsale">
                                                                                                SALE
                                                                                            </span>
                                                                                            <div
                                                                                                class="slider slider-images visible">
                                                                                                @foreach ($product->files as $image)
                                                                                                <a href="{{ $product->url }}"
                                                                                                    class="remove_underline">
                                                                                                    <img width="500"
                                                                                                        height="500"
                                                                                                        {{-- src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.1-min-500x500.jpg" --}}
                                                                                                        src="{{ asset('storage/'.$image->path) }}"
                                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
                                                                                                </a>
                                                                                                <a href="{{ $product->url }}"
                                                                                                    class="remove_underline">
                                                                                                    <img width="500"
                                                                                                        height="500"
                                                                                                        {{-- src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.1-min-500x500.jpg" --}}
                                                                                                        src="{{ asset('storage/'.$image->path) }}"
                                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
                                                                                                </a>
                                                                                                {{-- <a href="product.html"
                                                                                                    class="remove_underline">
                                                                                                    <img width="500"
                                                                                                        height="500"
                                                                                                        src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-500x500.jpg"
                                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                                        alt=""
                                                                                                        srcset="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-500x500.jpg 500w, https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-150x150.jpg 150w, https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-300x300.jpg 300w, https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-768x768.jpg 768w, https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-200x200.jpg 200w, https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-600x600.jpg 600w, https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-100x100.jpg 100w, https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min.jpg 800w"
                                                                                                        sizes="(max-width: 500px) 100vw, 500px">
                                                                                                </a> --}}
                                                                                                @endforeach

                                                                                            </div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="wc-product-title-wrap">
                                                                                            <h5 class="font-titles">
                                                                                                <a href="/{{ $product->url }}" class="color-dark"> {{ $product->title }} </a>
                                                                                            </h5>
                                                                                            <div
                                                                                                class="hide-price-and-cart">
                                                                                                <div class="price">
                                                                                                    <span
                                                                                                        class="woocs_price_code">
                                                                                                        {{-- <del>
                                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                                {{ $product->price_origin }}
                                                                                                            </span>
                                                                                                        </del> --}}
                                                                                                        <ins>
                                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                                                {{ $product->price_selling }}
                                                                                                            </span>
                                                                                                        </ins>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="add-to-cart">
                                                                                                    <a href="#"
                                                                                                        rel="nofollow"
                                                                                                        class="add_to_cart_button product_type_simple single_add_to_cart_button btn-loading-disabled ">Add
                                                                                                        to cart</a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
@endforeach

                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                    <div style="clear:both"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>


                                    </div>
                                </article>
                            </main>
                        </div>

                    </div>
                </div>
            </section>


            @include('components/footnote')

        </main>
    </div>

@endsection
