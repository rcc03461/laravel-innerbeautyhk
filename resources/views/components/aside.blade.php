<aside id="aside">

    <div class="submenu_cart cart " :class="{'visible': sideCart}">
        <div class="cart_header">
            <div class="cart_heading">
                <h6 class="cart_heading_title">Review Cart</h6>
            </div>
            <div class="close close-bar" id="close_cart" @click.prevent="toggleCart">
                <div class="close-bar-btn btn-round round-animation" tabindex="0">
                    <i class="ion ion-md-close"></i>
                </div>
            </div>
        </div>
        <div class="widget_shopping_cart_content">

            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="https://stockie.colabr.io/demo10/cart/?remove_item=4aa2bbac27f1625907a53d2933a16e04&amp;_wpnonce=9fc7629d9b"
                        class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                        <a class="mini_cart_item-image" href="https://stockie.colabr.io/demo10/product/gosta-wooden-pencil-2/">
                            <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__39.1-min-500x500.jpg"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                        </a>
                    <div class="mini_cart_item-desc">
                        <a class="font-titles"
                            href="https://stockie.colabr.io/demo10/product/gosta-wooden-pencil-2/">Gosta
                            wooden pencil</a> <span class="woo-c_product_category"> <a
                                href="https://stockie.colabr.io/demo10/product-category/livestyle/"
                                rel="tag">Livestyle</a></span>

                        <span class="quantity">
                            1 ×
                            <span class="woocs_special_price_code">
                                <span class="woocommerce-Price-amount amount">28.00
                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                </span>
                            </span>
                        </span>
                    </div>
                </li>
            </ul>
            <div class="woocomerce-mini-cart__container">
                <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span
                        class="woocs_special_price_code"><span class="woocommerce-Price-amount amount">28.00<span
                                class="woocommerce-Price-currencySymbol">$</span></span></span></p>


                <p class="woocommerce-mini-cart__buttons buttons"><a href="https://stockie.colabr.io/demo10/cart/"
                        class="button wc-forward">View cart</a><a href="https://stockie.colabr.io/demo10/checkout/"
                        class="button checkout wc-forward">Checkout</a></p>
            </div>

        </div>
    </div>

</aside>
