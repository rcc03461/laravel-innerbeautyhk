@extends('layouts.app')



@section('content')
<div class="page-container type2-left">


    <main id="content">


        @include('components/menu')


        <section>
            <div id="content" class="site-content">


                <div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <div class="page-container">
                        <div class="vc_row">
                            <div class="breadcrumbs-container vc_col-md-12 vc_col-md-8 vc_col-lg-push-2">
                                <div class="breadcrumbs-slug">
                                    <a class="brand-color-hover" itemprop="itemListElement" itemscope=""
                                        itemtype="http://schema.org/ListItem" href="/">SHOP</a>
                                    <i class="ion ion-ios-arrow-forward"></i>
                                    <span class="current" itemprop="itemListElement" itemscope=""
                                        itemtype="http://schema.org/ListItem">Thank You</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="page-container">
                    <div id="primary" class="content-area">


                        <div class="page-content ">
                            <main id="main" class="site-main">
                                <article class="post page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <div class="vc_row woo-c">

                                                <div
                                                    class="vc_col-lg-8 vc_col-lg-push-2 vc_col-md-10 vc_col-md-push-1 page-offset-top page-offset-bottom page-with-right-sidebar">
                                                    <form class="woocommerce-cart-form" action="#" method="post">

                                                        <div class="woo-c_cart_messages"></div>

                                                        <div
                                                            class="woo-c_cart_table cart shop_table shop_table_responsive cart woocommerce-cart-form__contents">


<div>
<h2>Thank You.</h2>
<p>We will delivery your order ASAP.</p>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td>{{$invoice->name}}</td>
        </tr>
        <tr>
            <td>Tel</td>
            <td>:</td>
            <td>{{$invoice->tel}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{$invoice->email}}</td>
        </tr>
        <tr>
            <td>Delivery to</td>
            <td>:</td>
            <td>{{$invoice->address}}</td>
        </tr>
    </table>
</div>


@foreach( $invoice->products as $key => $product )
                                                            <div class="woo-c_cart_table_item">

                                                                <div class="woo-c_cart_table_item_thumbnail">
                                                                    <a href="/p/{{$product->url}}">
                                                                        <img width="500" height="500"
                                                                    src="/storage/{{$product->files[0]->path}}"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" />
                                                                    </a>
                                                                </div>

                                                                <div class="woo-c_cart_table_details">
                                                                    <div class="woo-c_cart_table_item_name"
                                                                        data-title="Product">
                                                                        <div class="woo-c_product">
                                                                            <a
                                                                                href="/p/{{$product->url}}">
                                                                               {{$product->title}}
                                                                            </a>
                                                                            <span class="woo-c_product_category">
                                                                                <span class="woocs_special_price_code">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount">
                                                                                        <span
                                                                                            class="woocommerce-Price-currencySymbol">HK&#36;</span>
                                                                                        {{$product->price_selling}}
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    {{-- <div class="woo-c_cart_table_item_values"></div>

                                                                <div class="woo-c_cart_table_item_colors"></div> --}}

                                                                    <div class="woo-c_cart_table_item_price price-value"
                                                                        data-title="Price">
                                                                        <span class="woocs_special_price_code">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol">HK&#36;</span>
                                                                                {{$product->pivot->price_sold * $product->pivot->qty}}
                                                                            </span>
                                                                        </span>
                                                                    </div>

                                                                    <div class="woo-c_cart_table_item_quantity"
                                                                        data-title="Quantity">
                                                                        QTY:<div class="qty_label"></div>&nbsp;{{$product->pivot->qty}}

                                                                    </div>


                                                                </div>
                                                            </div>
@endforeach





                                                        </div>
                                                        <div class="woo-c_actions actions">
                                                            <div class="vc_row">

                                                                {{-- <div class="vc_col-md-8">
                                                                <fieldset class="woo-c_actions_coupon">
                                                                    <label for="coupon_code" class="field-label">Coupon code</label>
                                                                    <input type="text" name="coupon_code" id="coupon_code" value="" placeholder="Enter coupon code" />
                                                                    <button type="submit" class="btn" name="apply_coupon">Apply Coupon</button>
                                                                </fieldset>
                                                            </div> --}}

                                                                <div class="vc_col-md-4 text-right">
                                                                    <!-- <fieldset class="without-label"> -->

                                                                    <!-- Add class btn-loading to init preloader -->
                                                                    <button type="submit" class="btn update-cart"
                                                                        name="update_cart" value="Update Cart">Place
                                                                        Order</button>

                                                                    <!-- </fieldset> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="vc_row woo-c">
                                                <div
                                                    class="vc_col-lg-8 vc_col-lg-push-2 vc_col-md-10 vc_col-md-push-1 page-offset-top">
                                                    <div class="woo-c_cart_collaterals cart-collaterals">
                                                        <div class="woo-c_cart_totals cart_totals ">



                                                            <h4 class="heading-sm">Totals :</h4>

                                                            <table
                                                                class="woo-c_details_table shop_table shop_table_responsive">

                                                                {{-- <tr>
                                                                    <th class="woo-c_details_table_label">Subtotal</th>
                                                                    <td class="woo-c_details_table_price" id="subtotal"
                                                                        data-title="Subtotal"><span
                                                                            class="woocs_special_price_code"><span
                                                                                class="woocommerce-Price-amount amount">38.00<span
                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                    </td>
                                                                </tr> --}}



                                                                <tr class="order-total">
                                                                    <th class="woo-c_details_table_label">Total</th>
                                                                    <td class="woo-c_details_table_price woo-c_details_table_total text-right"
                                                                        id="total" data-title="Total">
                                                                        <strong>
                                                                            <span class="woocs_special_price_code">
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount">
                                                                                    <span
                                                                                        class="woocommerce-Price-currencySymbol">HK&#36;</span>
                                                                                    {{$invoice->total}}
                                                                                </span>
                                                                            </span></strong>
                                                                    </td>
                                                                </tr>









                                                            </table>

                                                            {{-- <div class="wc-proceed-to-checkout">
                                                                <a href="https://stockie.colabr.io/demo10/checkout/"
                                                                    class="btn full-width checkout-button button alt wc-forward">
                                                                    Proceed to Checkout <i
                                                                        class="ion ion-right ion-ios-arrow-forward"></i>
                                                                </a>
                                                            </div> --}}


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--.woo-c-->


                                        </div>
                                    </div>
                                </article>
                            </main>
                        </div>

                    </div>
                </div>


            </div><!-- #content -->
        </section>



        @include('components/footnote')

    </main>
</div>

@endsection




@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"
    integrity="sha256-ufGElb3TnOtzl5E4c/qQnZFGP+FYEZj5kbSEdJNrw0A=" crossorigin="anonymous"></script>


<script>
    window.Clb = {
        init: function () {
            // Header
            this.header = $('#masthead');
            this.headerIsFifth = Clb.header.hasClass('header-5');
            this.headerIsSixth = Clb.header.hasClass('header-6');

            this.headerFixed = {
                initialOffset: parseInt(this.header.attr('data-fixed-initial-offset')) || 150,

                enabled: $('[data-header-fixed]').length,
                value: false,

                mobileEnabled: $('[data-mobile-header-fixed]').length,
                mobileValue: false
            };

            this.headerSearch = $('.header-search');

            this.subheader = $('.subheader');

            // Logos
            this.siteBranding = this.header.find('.site-branding');
            this.siteTitle = this.header.find('.site-title');
            this.logo = this.header.find('.logo');
            this.fixedLogo = this.header.find('.fixed-logo');
            this.mobileLogo = this.header.find('.mobile-logo');
            this.fixedMobileLogo = this.header.find('.fixed-mobile-logo');

            this.logoForOnepage = this.header.find('.for-onepage');
            this.logoForOnepageDark = this.logoForOnepage.find('.dark');
            this.logoForOnepageLight = this.logoForOnepage.find('.light');

            // Menus
            this.megaMenu = this.header.find('#mega-menu-wrap');

            // Page
            this.containerLoading = $('.container-loading');

            this.shopProductsType = $('.woo-shop-container');

            this.resize();
        },

        resize: function () {
            this.isMobile = $(window).width() <= 768;
            this.isPad = $(window).width() <= 1024;
        }
    };

</script>
@endsection
