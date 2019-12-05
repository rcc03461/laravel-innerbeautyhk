<header id="masthead" class="site-header header-1 both_type no-transition" data-header-fixed="true"
    data-fixed-initial-offset="150">

    <div class="header-wrap">
        <div class="header-wrap-inner">
            <div class="left-part">




                <div class="site-branding ">
                    <div class="site-title">
                        <a href="/" rel="home" class="remove_underline">
                            <div class="logo">
                                <!-- <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2018/12/stockie__logo.svg" class="svg-logo" alt="Stockie Theme: demo10"> -->
                                Inner Beauty
                            </div>

                        </a>
                    </div>
                </div><!-- .site-branding -->
            </div>
            <div class="right-part">

                <nav id="site-navigation" class="main-nav">

                    <!-- Mobile overlay -->
                    <div class="mbl-overlay">
                        <div class="mbl-overlay-bg"></div>

                        <!-- Close bar -->
                        <div class="close close-bar">
                            <div class="close-bar-btn btn-round round-animation" tabindex="0">
                                <i class="ion ion-md-close"></i>
                            </div>
                        </div>
                        <div class="mbl-overlay-container">

                            <!-- Navigation -->
                            <div id="mega-menu-wrap" class="main-nav-container" role="navigation">

                                <ul id="primary-menu" class="menu">
                                    <li class="mega-menu-item nav-item menu-item-depth-0 current-menu-item">
                                        <a href="/" class="menu-link main-menu-link item-title"><span>Shop</span></a>
                                    </li>

                                </ul>
                            </div>



                            <!-- Social links -->
                        </div>
                    </div>
                </nav>





                <ul class="menu-other">


                    <li class="header-cart">
                        <span class="cart-total font-titles">
                            <a class="cart-customlocation" href="/cart"><span
                                    class="woocommerce-Price-amount amount">0.00<span
                                        class="woocommerce-Price-currencySymbol">$</span></span></a>


                        </span>
                        <a href="#" class="cart" @click.prevent="toggleCart">
                            <span class="icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12 16"
                                    xml:space="preserve">
                                    <path class="st0" d="M9,4V3c0-1.7-1.3-3-3-3S3,1.3,3,3v1H0v10c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V4H9z M4,3c0-1.1,0.9-2,2-2
        						s2,0.9,2,2v1H4V3z"></path>
                                </svg>
                            <span class="cart-count brand-bg-color">@{{totalQty}}</span>
                            </span>
                        </a>

                    </li>

                </ul>

                <div class="close-menu"></div>
            </div>
        </div>
    </div>
</header>
