@extends('layouts.admin')



@section('content')
<div class="page-container type2-left">


    <main id="content">


        {{-- @include('components/menu') --}}


        <section style="padding-top:2em">
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
                            <div class="d-flex flex-column">

                                <h1 class="page-title">
                                    All Products
                                </h1>
                                <div>

                                    <a class="" href="/product/create">Create New Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .header-title -->



                <div class="page-container" style="padding-top:2em">
                    <div id="primary" class="content-area">


                        <div class="page-content ">
                            <main id="main" class="site-main">
                                {{-- <article class="page type-page status-publish hentry">

                                </article> --}}
<?php
// print_r($products);
?>
                                <table>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Origin Price</th>
                                        <th>Selling Price</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($products as $index => $product)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->price_origin}}</td>
                                        <td>{{$product->price_selling}}</td>
                                        <td><a href="/product/{{$product->id}}/edit">Edit</a></td>
                                    </tr>

                                    @endforeach
                                </table>
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
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->


<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
{{-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> --}}
<!-- Initialize the editor. -->
<script>
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
</script>
<script type="text/javascript">
    // CKEDITOR.replace('content', {
    //     filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // });
    // $('#editor').summernote();
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


</script>
@endsection
