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
                <li class="woocommerce-mini-cart-item mini_cart_item" v-for="prod,i in cart_products">
                    <a @click="cartRemove(prod.id)" href="#" class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                    <a class="mini_cart_item-image" :href="'/p/'+prod.url">
                        <img :src="'/storage/'+prod.files" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                    </a>
                    <div class="mini_cart_item-desc">
                        <a :href="'/p/'+prod.url">
                            @{{ prod.title }}
                        </a>
                        {{-- <span class="woo-c_product_category"> <a
                                href="https://stockie.colabr.io/demo10/product-category/livestyle/"
                                rel="tag">Livestyle</a>
                        </span> --}}

                        <span class="quantity">
                            @{{ prod.qty }} ×
                            <span class="woocs_special_price_code">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">HK$</span>
                                    @{{ prod.price_selling }}
                                </span>
                            </span>
                        </span>
                    </div>
                </li>
            </ul>
            <div class="woocomerce-mini-cart__container">
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                <span
                        class="woocs_special_price_code">
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">HK$</span>
                            @{{totalPrice}}
                            </span>
                        </span>
                </p>


                <p class="woocommerce-mini-cart__buttons buttons">
                    {{-- <a href="/cart" class="button wc-forward">View cart</a> --}}
                    <a href="/cart" class="button checkout wc-forward">Checkout</a>
                </p>
            </div>

        </div>
    </div>

</aside>
