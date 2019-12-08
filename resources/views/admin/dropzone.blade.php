@extends('layouts.admin')



@section('content')
<div class="page-container type2-left">


    <main id="content">


        {{-- @include('components/menu') --}}


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
                                <article class="post page type-page status-publish hentry">


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
{{-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> --}}

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
{{-- <textarea></textarea> --}}

<!-- Include Editor JS files. -->
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script> --}}

<!-- Initialize the editor. -->
{{-- <script>
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
</script> --}}


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
