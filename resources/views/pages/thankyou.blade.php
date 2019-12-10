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
                                        itemtype="http://schema.org/ListItem"
                                        href="/">SHOP</a>
                                    <i class="ion ion-ios-arrow-forward"></i>
                                    <span class="current" itemprop="itemListElement" itemscope=""
                                        itemtype="http://schema.org/ListItem">Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="page-container">
                    <div id="primary" class="content-area">


                        <div class="page-content ">
                            <main id="main" class="site-main">
                                <article id="post-18970" class="post-18970 page type-page status-publish hentry">
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





                                                            <div class="woo-c_cart_table_item" v-for="prod,i in cart_products">

                                                                <div class="woo-c_cart_table_item_thumbnail">
                                                                    <a :href="'/p/'+prod.url">
                                                                        <img width="500" height="500"
                                                                            :src="'storage/'+prod.files"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" />
                                                                    </a>
                                                                </div>

                                                                <div class="woo-c_cart_table_details">
                                                                    <div class="woo-c_cart_table_item_name"
                                                                        data-title="Product">
                                                                        <div class="woo-c_product">
                                                                            <a :href="'/p/'+prod.url">@{{prod.title}}</a>
                                                                            <span class="woo-c_product_category">
                                                                                <span class="woocs_special_price_code">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">HK&#36;</span>
                                                                                        @{{prod.price_selling}}
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    {{-- <div class="woo-c_cart_table_item_values"></div>

                                                                <div class="woo-c_cart_table_item_colors"></div> --}}

                                                                    <div class="woo-c_cart_table_item_price price-value" data-title="Price">
                                                                    <span class="woocs_special_price_code">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">HK&#36;</span>
                                                                            @{{prod.price_selling * prod.qty}}
                                                                        </span>
                                                                    </span>
                                                                </div>

                                                                    <div class="woo-c_cart_table_item_quantity"
                                                                        data-title="Quantity">
                                                                        QTY:<div class="qty_label"></div>&nbsp;
                                                                        <div class="woo-quantity">
                                                                            <div @click="cartAddQty(prod.id)"
                                                                                class="plus cart_plus brand-bg-color-hover-before brand-bg-color-hover-after wac-btn-inc">
                                                                            </div>
                                                                            <div @click="cartMinusQty(prod.id)"
                                                                                class="minus cart_minus brand-bg-color-hover-before wac-btn-sub">
                                                                            </div>
                                                                            <input type="number"
                                                                            class="input-text qty text" step="1" min="0"
                                                                            v-model="prod.qty" title="Qty" size="50"
                                                                            aria-labelledby="Stainless steel teapot quantity" />

                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                    @click="cartRemove(prod.id)"
                                                                    class="woo-c_cart_table_item_remove">
                                                                        <a href="#" class="remove-link"
                                                                            title="Remove this item">
                                                                            <i class="ion ion-md-close"></i>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>






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



                                                            <h4 class="heading-sm">Cart totals</h4>

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
                                                                            <span
                                                                                class="woocs_special_price_code">
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">HK&#36;</span>
                                                                                    @{{totalPrice}}
                                                                        </span>
                                                                    </span></strong>
                                                                    </td>
                                                                </tr>


                                                                <tr
                                                                    class="woocommerce-shipping-totals shipping woo-c_details_table_label">
                                                                    <td colspan="2" class="woo-c_details_table_checkbox"
                                                                        data-title="Shipping">

<form class="woocommerce-shipping-calculator" action="#" method="post">
<div class="vc_row woo-c">

    <div class="vc_col-lg-6 vc_col-sm-12 page-offset-top">
        <p class="woo-c_details_table_label">
            CONTACT DETAIL :
        </p>

        <section class="shipping-calculator-form">




            <p class="form-row form-row-wide">
                <input type="text" class="input-text" v-model="form.email"placeholder="Email" />
            </p>

            <div class="vc_row woo-c">
                <div class="vc_col-xs-6 page-offset-top">
                    <p class="form-row form-row-wide">
                        <input type="text" class="input-text" v-model="form.name"placeholder="Name" />
                    </p>
                </div>
                <div class="vc_col-xs-6 page-offset-top">
                    <p class="form-row form-row-wide">
                        <input type="text" class="input-text" v-model="form.tel"placeholder="Tel" />
                    </p>
                </div>
            </div>



        </section>
    </div>
    <div class="vc_col-lg-6 vc_col-sm-12 page-offset-top">

        <p class="woo-c_details_table_label">
            SHIPPING ADDRESS:
        </p>

            <p class="form-row form-row-wide" id="calc_shipping_country_field">
                <select v-model="form.address" placeholder="順豐智能櫃">
                    <option value="">順豐智能櫃</option>
                    <optgroup v-for="(zone, key) in pickup_address" :label="key">
                        <option v-for="z in zone" :value="z.code + '-' + z.address">@{{z.code}}-@{{z.address}}</option>
                    </optgroup>
                </select>
            </p>
    </div>




</div>
<div>** Please fill the correct contact that we could deliver those products to you ASAP.</div>
 </form>
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
                                                            <div class="d-flex justify-content-around">
                                                                <div id="paypal-button-container"></div>
                                                                <button @click="logorder()">Place Order</button>
                                                            </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js" integrity="sha256-ufGElb3TnOtzl5E4c/qQnZFGP+FYEZj5kbSEdJNrw0A=" crossorigin="anonymous"></script>
<script src="https://www.paypalobjects.com/api/checkout.js" crossorigin="anonymous"></script>
<script>
            // Render the PayPal button

            paypal.Button.render({
                // Set your environment
                env: 'production', // sandbox | production
                // PayPal Client IDs - replace with your own
                // Create a PayPal app: https://developer.paypal.com/developer/applications/create
                client: {
                    production: 'AXucPusi-Enc-rGFewLs1nVSoU2v9AeP_X89u3tHfh9PYb9ZodczxeGNz0S4y_YxniVm4CegRFTCwBa3'
                },
                payment: function () {
                    // Make a client-side call to the REST api to create the payment
                    // return;
                    // if (app.total == 0 || !app.name || !app.tel || !app.email || !app.address) {

                    //     $.confirm({
                    //         title: 'Confirm!',
                    //         col: 'col-sm-4',
                    //         content: '請填入全部資料。',
                    //         buttons: {
                    //             confirm: function () {
                    //                 // $('#first_name').focus();

                    //             }
                    //         }
                    //     });

                    //     return false;
                    // }

                    if (!app.validateForm()) {
                        alert("請填寫正確資料，以確保我們能盡快將貸品送到你手上。")
                        return false;
                    }


                    return paypal.rest.payment.create(this.props.env, this.props.client, {
                        transactions: [{
                            "amount": {
                                "total": app.totalPrice,
                                "currency": "HKD",
                                "details": {
                                    "subtotal": app.totalPrice,
                                    "tax": "0.00",
                                    "shipping": "20.00",
                                    "shipping_discount": "-20.00"
                                }
                            },
                            "description": "Thank you! 我們確認訂單後便會立即送貨. 同時請留意您的電郵.",
                            // "custom": app.remark,
                            // "invoice_number": "merchant invoice",
                            "item_list": {
                                "items": app.item_list
                                // [{
                                //     "name": "Inner感3支裝",
                                //     "description": $("#quantity option:selected").text(),
                                //     "price": $('#quantity').val(),
                                //     "currency": "HKD",
                                //     "tax": "0.00",
                                //     "quantity": 1
                                // },
                                // {
                                //   "name": "item 2",
                                //   "description": "item 2 description",
                                //   "price": "1.00",
                                //   "currency": "USD",
                                //   "tax": "1.00",
                                //   "quantity": 1
                                // }
                                // ]
                            }
                        }]
                    });
                },

                // Wait for the payment to be authorized by the customer

                onAuthorize: function (data, actions) {

                    // Execute the payment

                    return actions.payment.execute().then(function () {

                        // document.querySelector('#paypal-button-container').innerHTML =
                        //     'Payment Complete! <br>Thank you! 我們確認訂單後便會立即送貨. 同時請留意您的電郵.<br><a href="https://api.whatsapp.com/send?phone=+85263311525&text="><img src="images/notifyme.png"></a>';


                        // let d = new Date()
                        // let uuid = 'Paypal-' + d.getYear() + d.getMonth() + '-' + app.uuid;

                        // app.log('A new Transation Complete' + uuid);


                    });
                }

            }, '#paypal-button-container');
        </script>

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
