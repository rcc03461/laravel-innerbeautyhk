@extends('layouts.app')



@section('content')
<div class="page-container type2-left">


    <main id="content">


        @include('components/menu')

    <section>
            <div id="content" class="site-content">

                <div class="woo_c-product single-product subheader_included spacer_excluded sticky_included ">

                    <div id="product"
                        class="product type-product status-publish has-post-thumbnail product_cat-livestyle product_tag-shop product_tag-theme product_tag-wordpress first instock sale shipping-taxable purchasable product-type-simple">

                        <div class="page-container">

                            {{-- <div class="sticky-product">
                                <div class="sticky-product-img"
                                    style="background-image: url(https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.1-min-150x150.jpg)">
                                </div>
                                <div class="sticky-product-desc">
                                    <a href="#"
                                        class="title">{{ $product->title }}</a>
                                    <a href="#"
                                        class="category">Livestyle</a>
                                    <span class="price">&#36;38</span>
                                </div>
                                <form class="cart woocommerce-add-to-cart" method="post" enctype='multipart/form-data'>
                                    <div class="simple-qty" style="display: none">
                                        <div class="woo-quantity">
                                            <div
                                                class="plus cart_plus brand-bg-color-hover-before brand-bg-color-hover-after wac-btn-inc">
                                            </div>
                                            <div class="minus cart_minus brand-bg-color-hover-before wac-btn-sub">
                                            </div>
                                            <input type="number" id="quantity_5dce82965928b" class="input-text qty text"
                                                step="1" min="0" name="quantity" value="1" title="Qty" size="4"
                                                aria-labelledby="Stainless steel teapot quantity" />

                                        </div>
                                    </div>
                                    <div class="variations_button sticky-product-btn">
                                        <a class="single_add_to_cart_button btn alt sticky-product-cart btn">
                                            <span class="icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 12 16" xml:space="preserve">
                                                    <path class="st0"
                                                        d="M9,4V3c0-1.7-1.3-3-3-3S3,1.3,3,3v1H0v10c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V4H9z M4,3c0-1.1,0.9-2,2-2 s2,0.9,2,2v1H4V3z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div> --}}

                            <div class="vc_row">
                                <div class="vc_col-md-6 vc_col-sm-12 woo_c-product-image">
                                    <div class="woo_c-product-image-slider stockie-gallery-sc gallery-wrap"
                                        data-gallery="stockie-custom-19083">
                                        <div class="product_images woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">

                                            @foreach ($product->files as $image)

                                                <div class="image-wrap woocommerce-product-gallery__image">
                                                    {{-- <div class="woo_c-product-image-slider-trigger btn-round grid-item gallery-image"
                                                        data-gallery-item="0" data-lazy-item="true">
                                                        <i class="ion ion-md-expand"></i>
                                                    </div> --}}
                                                    <img class="gimg wp-post-image"
                                                        src="{{ asset('storage/'.$image->path) }}"
                                                        alt="Stainless steel teapot">
                                                </div>
                                                {{-- <div class="image-wrap woocommerce-product-gallery__image">
                                                    <div class="woo_c-product-image-slider-trigger grid-item gallery-image btn-round"
                                                        data-gallery-item="1" data-lazy-item="true"><i
                                                            class="ion ion-md-expand"></i>
                                                    </div><img class="gimg"
                                                        src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo10/2019/03/st__product__47.2-min-600x600.jpg"
                                                        alt="Stainless steel teapot">
                                                </div> --}}

                                            @endforeach

                                        </div>

                                        <div class="numbers_slides">

                                        </div>
                                    </div>

                                    <span class="brand-bg-color woo-onsale"> SALE</span>
                                </div>
                                <div class="vc_col-md-6 vc_col-sm-12 woo_c-product-details">
                                    <div class="summary entry-summary woo_c-product-details-inner">
                                        <div class="breadcrumbs">
                                            <div class="breadcrumbs-inner">
                                                <a class="brand-color-hover"
                                                    href="/">
                                                    Shop </a>
                                                <i class="ion ion-ios-arrow-forward"></i> <span
                                                    class="current">Product</span>
                                            </div>
                                            <!-- Prod nav -->
                                            {{-- <div class="woo_c-product-nav">
                                                    <a href="https://stockie.colabr.io/demo10/product/johanna-kitchen-stool/"
                                                        class="woo_c-product-nav-prev tooltip">
                                                        <i class="ion ion-ios-arrow-back"></i>
                                                        <div
                                                            class="tooltip-item brand-bg-color brand-bg-color-before left">
                                                            prev</div>
                                                    </a>
                                                    <a href="https://stockie.colabr.io/demo10/product/gosta-wooden-pencil-2/"
                                                        class="woo_c-product-nav-next tooltip">
                                                        <i class="ion ion-ios-arrow-forward"></i>
                                                        <div
                                                            class="tooltip-item brand-bg-color brand-bg-color-before right">
                                                            next</div>
                                                    </a>
                                                </div> --}}
                                        </div>
                                        <div class="woo-summary-content">
                                            <div class="wrap">

                                                <div class="site-container">

                                                    <div class="vc_col-sm-12 wc-single-page-message">
                                                        <div class="woocommerce-notices-wrapper"></div>
                                                    </div>
                                                    <span class="woo_c-product-details-label tag in-stock">In
                                                        stock</span>

                                                    <h1 itemprop="name"
                                                        class="woo_c-product-details-title product_title entry-title">
                                                        {{ $product->title }}
                                                    </h1>
                                                    <p class="price">

                                                        <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">&#036;</span>
                                                                {{ $product->price_origin }}
                                                            </span>
                                                        </del>
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">&#036;</span>
                                                                {{ $product->price_selling }}
                                                            </span>
                                                        </ins>

                                                    </p>
                                                    <div class="woocommerce-product-details__short-description">
                                                        <p>
                                                            {!! $product->excerpt !!}
                                                        </p>
                                                    </div>
                                                    <!-- <div class="product_meta">
                                                            <span class="sku_wrapper">
                                                                SKU: <span class="sku"
                                                                    itemprop="sku">9015-DF-11-2-1<span
                                                                        class="dot-divider"></span></span>
                                                            </span>

                                                            <span class="woo-c_product_category">Category: <a
                                                                    href="https://stockie.colabr.io/demo10/product-category/livestyle/"
                                                                    rel="tag">Livestyle</a><span
                                                                    class="dot-divider"></span></span>
                                                            <span class="tagged_as">Tags: <a
                                                                    href="https://stockie.colabr.io/demo10/product-tag/shop/"
                                                                    rel="tag">Shop</a>, <a
                                                                    href="https://stockie.colabr.io/demo10/product-tag/theme/"
                                                                    rel="tag">Theme</a>, <a
                                                                    href="https://stockie.colabr.io/demo10/product-tag/wordpress/"
                                                                    rel="tag">WordPress</a></span>
                                                        </div> -->

                                                    <form
                                                        class="woo_c-product-details-variations cart woocommerce-add-to-cart"
                                                        method="post" enctype='multipart/form-data'>

                                                        <div class="simple-qty">
                                                            <div class="label">
                                                                <label for="quantity">QTY:</label>
                                                            </div>
                                                            <div class="woo-quantity">
                                                                <div @click="addQty"
                                                                    class="plus cart_plus brand-bg-color-hover-before brand-bg-color-hover-after wac-btn-inc">
                                                                </div>
                                                                <div @click="minusQty"
                                                                    class="minus cart_minus brand-bg-color-hover-before wac-btn-sub">
                                                                </div>
                                                                <input type="number"
                                                                    class="input-text qty text" step="1" min="0"
                                                                    name="quantity" v-model="productQty" title="Qty" size="4"/>

                                                            </div>
                                                        </div>

                                                        <div class="variations_button">
                                                            <a class="single_add_to_cart_button btn alt button" @click="addToCart(<?php echo $product->id ?>, productQty)">
                                                                <i class="icon ion ion-left">
                                                                    <svg version="1.1"
                                                                        xmlns="http://www.w3.org/2000/svg" width="12px"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px" viewBox="0 0 12 16"
                                                                        xml:space="preserve">
                                                                        <path class="st0"
                                                                            d="M9,4V3c0-1.7-1.3-3-3-3S3,1.3,3,3v1H0v10c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V4H9z M4,3c0-1.1,0.9-2,2-2 s2,0.9,2,2v1H4V3z" />
                                                                    </svg>
                                                                </i>
                                                                Add to cart
                                                            </a>


                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




@if ($product->content))
                        <div class="woocommerce page-container" style="max-width:800px">
                            <div class="tab" data-stockie-tab-box="true" id="product_review">
                                <div class="woocommerce-tabs wc-tabs-wrapper tabNav_wrapper">
                                    <ul class="tabs wc-tabs tabNav" role="tablist">

                                        <li class="tabNav_link  active" data-stockie-tab="description">
                                            <div class="title font-titles">
                                                Description
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tabItems">
                                    <div class="tabItems_item active" data-stockie-tab-content="description">
                                        <div class="wrap">
{{ $product->content }}

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
@endif




                    </div>
                </div>
            </div>
        </section>

@include('components/footnote')

</main>
</div>

@endsection




@section('script')
<script>
    //Single product gallery

    var singleProductGallery = function () {
        $('.product_images').each(function () {
            if ($(this).find('img').length > 1) {
                var slider = $(this);
                slider.owlCarousel({
                    items: 1,
                    nav: true,
                    navSpeed: 600,
                    dotsSpeed: 600,
                    autoHeight: true,
                    navClass: ['owl-prev btn-round', 'owl-next btn-round'],
                    navText: ["<i class='ion ion-ios-arrow-back'></i>",
                        "<i class='ion ion-ios-arrow-forward'></i>"
                    ],
                    onInitialized: counter, //When the plugin has initialized.
                    onTranslated: counter,
                    onChanged: counter,

                    responsive: {
                        0: {
                            loop: true
                        },
                        768: {
                            loop: false
                        }
                    }
                });

                slider.on('initialized.owl.carousel changed.owl.carousel resized.owl.carousel',
                    function (event) {
                        owl_carousel_thumbnails(event);
                    });
            };

            function counter(event) {
                var element = event.target;
                var items = event.item.count;
                var item = event.item.index + 1;
                $('.numbers_slides').html(item + " / " + items)
            }

            function owl_carousel_thumbnails(event) {
                var currentItem = event.item.index;
                $('.owl-dots-images .owl-dot-image').removeClass('active');
                $($('.owl-dots-images .owl-dot-image')[currentItem]).addClass('active');
            }
        });
    }


    singleProductGallery();
    handleSliders();
    /* ## Sliders */

    function handleSliders(image) {

        if (image === undefined) {
            image = $('.slider .gimg, .woo_c-product-image-slider .gimg');
        }

        //create second pagintaion with images preview
        var imagesPreviewArr = [];

        image.each(function () {
            imagesPreviewArr.push($(this).attr("src"));
        });

        if ($('.owl-dots-images').length < 1) {
            var previewPagin = $('<div class="owl-dots-images"></div>')

            for (var imageItem in imagesPreviewArr) {
                previewPagin.append('<div class="owl-dot-image"><img src="' + imagesPreviewArr[imageItem] +
                    '"></div>');
            }
        }

        var loaded = $('.owl-loaded');

        $(loaded).each(function (index) {
            if (loaded.eq(index).parents("li.product").length < 1) {
                loaded.eq(index).append(previewPagin);
            };
        });

        var owlDotImage = $('.owl-dot-image');

        owlDotImage.eq(0).addClass('active');

        $('.owl-dot').on('click', function () {
            var owlDotIndex = $(this).index();
            owlDotImage.removeClass('active');
            owlDotImage.eq(owlDotIndex).addClass('active')
        });

        owlDotImage.on('click', function () {
            var owlDotImageIndex = $(this).index();
            var owlItem = $(this).closest('.owl-dots-images').siblings('.owl-stage-outer').find(
                '.owl-item');
            $('.owl-dot').removeClass('active');
            $('.owl-dot').eq(owlDotImageIndex).addClass('active');

            owlDotImage.removeClass('active');
            $(this).addClass('active');


            owlItem.removeClass('active');
            owlItem.eq(owlDotImageIndex).addClass('active')
            var owlItemW = owlItem.eq(owlDotImageIndex).width() * owlDotImageIndex;
            if (owlItem.eq(owlDotImageIndex) == 0) {
                owlItemW = 0;
            }

            owlItem.parent('.owl-stage').css({
                transform: 'translate3d(-' + owlItemW + 'px, 0px, 0px)',
                transition: '0.25s'
            });
        });

        $('[data-stockie-slider]').each(function () {
            var carousel = $(this);
            var options = $(this).attr('data-stockie-slider');
            options = (options) ? JSON.parse(options) : {};

            options.autoHeight = (options.autoHeight == undefined) ? true : options.autoHeight;
            options.dotsSpeed = (options.dotsSpeed == undefined) ? 600 : options.dotsSpeed;
            options.keyControl = (options.keyControl == undefined) ? false : options.keyControl;

            if (options.autoplay) {
                options.autoplaySpeed = (options.autoplaySpeed == undefined) ? 600 : options.autoplaySpeed;
                options.autoplayTimeout = (options.autoplaySpeed == undefined) ? 600 : options
                    .autoplayTimeout * 1000;
            }

            options.responsive = {
                1025: {
                    items: options.itemsDesktop || 5,
                    nav: options.nav
                },
                769: {
                    items: options.itemsTablet || 3,
                    nav: options.nav
                },
                0: {
                    items: options.itemsMobile || 1,
                    nav: options.nav
                }
            };

            if (options.dots) {
                $(this).addClass('with-dots');
                options.dotClass = 'owl-dot ' + ((options.dotClass) ? options.dotClass : '');
                options.dotsClass = 'owl-dots ' + ((options.dotsClass) ? options.dotsClass : '');
            }

            options.navText = ['', ''];
            if (options.nav) {
                options.navSpeed = (options.navSpeed == undefined) ? 600 : options.navSpeed;
                options.navText = ['<i class="ion ion-ios-arrow-back"></i>',
                    '<i class="ion ion-ios-arrow-forward"></i>'
                ];
                options.navContainerClass = (options.navContainerClass) ? 'owl-nav ' + options
                    .navContainerClass : 'owl-nav';

                if (options.navClass) {
                    options.navClass = ['owl-prev btn-round' + options.navClass[0], 'owl-next btn-round' +
                        options.navClass[1]
                    ];
                } else {
                    options.navClass = ['owl-prev btn-round', 'owl-next btn-round'];
                }
            }

            // Nav buttons for slider offset
            var calculatePositionNavButtons = function () {
                if (carousel.hasClass('slider-offset')) {
                    var itemWidth = carousel.find('.owl-item').outerWidth();
                    var next = carousel.find('.owl-next'),
                        prev = carousel.find('.owl-prev');

                    if (!Clb.isMobile) {
                        prev.css('margin-left', (-itemWidth / 2 - prev.outerWidth() / 2) + 'px');
                        next.css('margin-left', (itemWidth / 2 - next.outerWidth() / 2) + 'px');
                    } else {
                        prev.css('margin-left', '');
                        next.css('margin-left', '');
                    }
                }
            };

            carousel.on(
                'initialized.owl.carousel refreshed.owl.carousel changed.owl.carousel resized.owl.carousel',
                function () {
                    if ($(this).hasClass('slider-offset')) {
                        var self = $(this);
                        setTimeout(function () {
                            self.find('.owl-item.active').removeClass('offset-active').eq(2)
                                .addClass('offset-active');
                        }, 50);
                    }
                });

            // Slider in slider
            options.onInitialized = function () {
                carousel.find('.owl-stage-outer').addClass('no-transition');
                carousel.find('.slider, .stockie-slider').trigger('refresh.owl.carousel');

                setTimeout(function () {
                    carousel.trigger('refresh.owl.carousel');

                    setTimeout(function () {
                        carousel.find('.owl-stage-outer').removeClass('no-transition');
                    }, 10);
                }, 10);
            };

            carousel.owlCarousel(options);

            if (options.mousewheel) {
                var test = true;
                carousel.on('wheel mousewheel', '.owl-stage', function (e) {
                    var y = e.originalEvent.deltaY;
                    if (test) {
                        carousel.trigger(((y > 0) ? 'next.owl' : 'prev.owl'), options.navSpeed ||
                            350);
                        test = false;
                        setTimeout(function () {
                            test = true;
                        }, 350);
                    }
                    e.preventDefault();
                    e.cancleBubbling = true;
                    return false;
                });
            }

            if (options.keyControl) {
                $(window).on('keydown', function (e) {
                    var key = e.which || e.keyCode;

                    if (key == 37) {
                        carousel.trigger('prev.owl', options.navSpeed || 350);
                    }
                    if (key == 39) {
                        carousel.trigger('next.owl', options.navSpeed || 350);
                    }
                });
            }
        });

        $('[data-stockie-slider-simple]').each(function () {
            $(this).owlCarousel({
                items: 1,
                nav: true,
                navRewind: true,
                navClass: ['owl-prev btn-round', 'owl-next btn-round'],
                navText: ['<i class="ion ion-ios-arrow-back"></i>',
                    '<i class="ion ion-ios-arrow-forward"></i>'
                ],
                dots: true,
                loop: true,
                autoHeight: true,
            });
        });
    }






    /*Single product*/

    //Sticky product

    var stickyProduct = function () {
        var productImg = $('.woo_c-product-image');
        var stickyProduct = $('.sticky-product');
        var stickyProductImg = stickyProduct.find('.sticky-product-img');

        $(window).on('scroll', function () {
            if ($(window).scrollTop() > productImg.height()) {
                stickyProduct.css({
                    'opacity': 1,
                    'visibility': 'visible'
                });
            } else {
                stickyProduct.css({
                    'opacity': 0,
                    'visibility': 'hidden'
                })
            }
        });

        if (Clb.isMobile) {
            var contentWidth = $('#content').height();
            var contentOffset = $('#content').offset().top;
            var contentEnd = contentWidth + contentOffset - $(window).height();

            $(window).on('scroll', function () {
                if ($(window).scrollTop() > contentEnd) {
                    stickyProduct.css({
                        'opacity': 0,
                        'visibility': 'hidden'
                    })
                }
            });
        }

        stickyProductImg.on("click", function () {
            $('body, html').animate({
                scrollTop: 0
            }, 500);
        });
    }

</script>
@endsection
