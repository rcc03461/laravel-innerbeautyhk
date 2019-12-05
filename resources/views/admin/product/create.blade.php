@extends('layouts.admin')



@section('content')
<div class="page-container type2-left">


    <main id="content">


        {{-- @include('components/menu') --}}


        <section>
            <div id="content" class="site-content">


                <div class="header-title without-cap text-left">
                    <div class="bg-image"></div>
                    <div class="header-title-content">
                        <div class="page-container">
                            <div class="back-link">
                                <a href="/"
                                    class="btn btn-link">
                                    <i class="ion-left ion ion-ios-arrow-back"></i>
                                    Back </a>
                            </div>
                            <h1 class="page-title">Add Product</h1>
                        </div>
                    </div>
                </div> <!-- .header-title -->



                <div class="page-container">
                    <div id="primary" class="content-area">


                        <div class="page-content ">
                            <main id="main" class="site-main">
                                <article class="page type-page status-publish hentry">
                                    <form class="woocommerce-shipping-calculator" action="{{ route("product.store") }}" method="post">
                                        @csrf


                                        <div class="vc-row vc-row-flex">
                                            <div id="form" class="vc_col-md-4">

                                                <input v-for="f,i in product_images" name="images[]" type="hidden" :value="f">
                                                <div class="vc-row">
                                                    <div v-for="file in files" class="vc_col-md-4"  :class="{'img-selected':product_images.indexOf(file.id) != -1}" @click="addImage(file.id)">
                                                        <img class="image-fluid" :src="file.url">
                                                    </div>
                                                </div>

                                                {{-- <button>Add Image</button> --}}
                                            </div>

                                            <section class="vc_col-md-8 shipping-calculator-form">

                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text" value="" placeholder="Url" name="url" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <textarea class="input-text" placeholder="Excerpt" name="excerpt" cols="30" rows="10"></textarea>
                                                </p>



                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text" value="" placeholder="Title" name="title" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text w-50" value="" placeholder="Price Origin" name="price_origin" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text w-50" value="" placeholder="Price Selling" name="price_selling" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <textarea name="content"></textarea>
                                                </p>

                                                <p>
                                                    <button type="submit" class="button">Submit</button>
                                                </p>
                                            </section>
                                        </div>

                                    </form>
                                </article>
                            </main>
                        </div>

                    </div>
                </div>


            </div><!-- #content -->
        </section>


</div>
</div>
</div>
</section>

@include('components/footnote')

</main>
</div>

@endsection




@section('script')


<!-- Include Editor style. -->
{{-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> --}}

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->


<!-- Include Editor JS files. -->
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script> --}}
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<!-- Initialize the editor. -->
{{-- <script>
  new FroalaEditor('[name=content]',{
      imageManagerLoadURL: '/api/images',
    // [
    //   {
    //     url: 'http://exmaple.com/images/photo1.jpg',
    //     thumb: "http://exmaple.com/thumbs/photo1.jpg",
    //     tag: 'flower',
    //     name: "Photo 1 Name",
    //     id: 103454285,
    //   }
    // ]
  });
</script> --}}
<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script>
    let app = new Vue({
        el:"#form",
        data:{
            files:[],
            product_images:[]
        },
        methods:{
            addImage( id ){
                // this.product_images.push();
                // if( this.product_images.include(id) ){

                // }else{
                //     this.product_images.push(id);
                // }
                var index = this.product_images.indexOf(id);
                if (index !== -1) {
                    this.product_images.splice(index, 1)
                }else{
                    this.product_images.push(id);
                };
            }
        },
        created(){
            let self = this;
            console.log('created');
            fetch('/api/images')
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {
                self.files = myJson;
                console.log(myJson);
            });
        }
    });

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


    handleCustomSelect();

    function handleCustomSelect(select) {
        /* ##Custom select */

        if (select === undefined) {
            select = $('select');
        }

        select.each(function () {
            if (select.hasClass('wpml-ls')) {
                $(this).addClass('select select-dropdown');
                var selectedLang = $(this).find(
                    '> ul:not(.wpml-ls-sub-menu) .wpml-ls-item .wpml-ls-item-toggle');
                var selectSubMenu = $(this).find('.wpml-ls-sub-menu');
                selectedLang.addClass('select-styled')
                selectSubMenu.addClass('select-options');
            } else {
                var $this = $(this),
                    numberOfOptions = $(this).children('option').length;

                $this.addClass('select-hidden');
                $this.wrap('<div class="select"></div>');
                $this.after('<div class="select-styled"></div>');

                var $styledSelect = $this.next('div.select-styled');
                $styledSelect.text($this.children('option').eq(0).text());
                if ($this.children('option:selected').length > 0) {
                    $styledSelect.text($this.children('option:selected').text());
                }

                var $list = $('<ul />', {
                    'class': 'select-options'
                }).insertAfter($styledSelect);

                for (var i = 0; i < numberOfOptions; i++) {
                    $('<li />', {
                        text: $this.children('option').eq(i).text(),
                        rel: $this.children('option').eq(i).val()
                    }).appendTo($list);
                }

                var $listItems = $list.children('li');

                var event = Clb.isPad ? 'touchend' : 'click';

                $styledSelect.on('click', function (e) {
                    e.stopPropagation();
                    $('.select').removeAttr('style');
                    $('div.select-styled.active').not(this).each(function () {
                        $(this).removeClass('active').next('ul.select-options').hide();
                    });
                    $(this).toggleClass('active').next('ul.select-options').toggle();
                    $(this).parents('.select').css('z-index', '11');
                });

                var dragging = false;
                $list.on('touchmove', function () {
                    dragging = true;
                });

                $listItems.on(event, function (e) {
                    if (dragging) {
                        dragging = false;
                        return;
                    }
                    e.stopPropagation();

                    $styledSelect.text($(this).text()).removeClass('active');
                    $this.val($(this).attr('rel'));
                    $this.trigger('change');
                    $list.hide();
                });

                if (!Clb.isPad) {
                    $(document).on(event, function (e) {
                        if (!$(e.target).hasClass('select-hidden')) {
                            $this.find(".select-options").hide();
                            $styledSelect.removeClass('active');
                        }
                    });
                }
            }
        });

        var languageSelect = $(".lang-dropdown .select-styled");
        languageSelect.each(function () {
            var self = $(this);

            $(this).on("click", function () {
                $(this).siblings(".select-options").show();
            });

            $(document).on('mouseup touchend', function (e) {
                if (!$(e.target).parents().hasClass('select-options')) {
                    $(".select-options").hide();
                } else {
                    $(".select-options").fadeOut();
                }
            });
        });
    }

</script>
@endsection
