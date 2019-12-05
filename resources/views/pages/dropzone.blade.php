@extends('layouts.app')



@section('content')
<div class="page-container type2-left">


    <main id="content">


        @include('components/menu')


        <section>
            <div id="content" class="site-content">


                {{-- <div class="header-title without-cap text-left">
                    <div class="bg-image"></div>
                    <div class="header-title-content">
                        <div class="page-container">
                            <div class="back-link">
                                <a href="https://stockie.colabr.io/demo10/product/stainless-steel-teapot-2/"
                                    class="btn btn-link">
                                    <i class="ion-left ion ion-ios-arrow-back"></i>
                                    Back </a>
                            </div>
                            <h1 class="page-title">Cart</h1>
                        </div>
                    </div>
                </div>  --}}



                <div class="page-container">
                    <div id="primary" class="content-area">


                        <div class="page-content ">
                            <main id="main" class="site-main">
                                <article id="post-18970" class="post-18970 page type-page status-publish hentry">


    <h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>
    <form method="post" action="{{ url('/dropzone') }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
        @csrf
    </form>


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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<!-- Include Editor style. -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
<textarea></textarea>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

<!-- Initialize the editor. -->
<script>
  new FroalaEditor('textarea',{
    //   imageManagerLoadURL: 'http://example.com/load_images',
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
