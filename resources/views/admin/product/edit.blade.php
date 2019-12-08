@extends('layouts.admin')



@section('content')

<div class="page-container type2-left">

<?php
// $temp = [];
// $temp = [123,432];
// $product->files->map(function($f){
//     $temp[] = $f->id;
// });
// print_r(json_encode($product_images));
?>
    <main id="content">


        {{-- @include('components/menu') --}}


        <section style="padding-top:2em">
            <div id="content" class="site-content">


                <div class="header-title without-cap text-left">
                    <div class="bg-image"></div>
                    <div class="header-title-content">
                        <div class="page-container">
                            <div class="back-link">
                                <a href="/product"
                                    class="btn btn-link">
                                    <i class="ion-left ion ion-ios-arrow-back"></i>
                                    Back </a>
                            </div>
                            <h1 class="page-title">Edit Product</h1>
                        </div>
                    </div>
                </div> <!-- .header-title -->



                <div class="page-container" style="padding-top:2em">
                    <div id="primary" class="content-area">


                        <div class="page-content ">
                            <main id="main" class="site-main">
                                <article class="page type-page status-publish hentry">
                                    <form class="woocommerce-shipping-calculator" action="{{ route("product.update", $product->id) }}" method="post">
                                        @csrf
                                        @method('PUT')


                                        <div class="vc-row vc-row-flex">
                                            <div id="form" class="vc_col-md-4">

                                                <input v-for="f,i in product_images" name="images[]" type="hidden" :value="f">
                                                <div class="vc-row">
                                                    <div v-for="file in files" class="vc_col-xs-6 vc_col-md-4"  :class="{'img-selected':product_images.indexOf(file.id) != -1}" @click="addImage(file.id)">
                                                        <img class="image-fluid" :src="file.url">
                                                    </div>
                                                </div>

                                            </div>

                                            <section class="vc_col-md-8 shipping-calculator-form">

                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text" value="{{$product->url}}" placeholder="Url" name="url" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <textarea class="input-text" placeholder="Excerpt" name="excerpt" cols="30" rows="10">{{$product->excerpt}}</textarea>
                                                </p>



                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text" value="{{$product->title}}" placeholder="Title" name="title" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text w-50" value="{{$product->price_origin}}" placeholder="Price Origin" name="price_origin" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <input type="text" class="input-text w-50" value="{{$product->price_selling}}" placeholder="Price Selling" name="price_selling" />
                                                </p>

                                                <p class="form-row form-row-wide">
                                                    <textarea id="editor" name="content">{{$product->content}}</textarea>
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

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<!-- Include Editor style. -->
{{-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> --}}

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->


<!-- Include Editor JS files. -->
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script> --}}
{{-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> --}}
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
{{-- <script type="text/javascript">
    // CKEDITOR.replace('content', {
    //     filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // });
    // $('#editor').summernote();
</script> --}}
<script>
    let app = new Vue({
        el:"#form",
        data:{
            files:[],
            product_images:JSON.parse("<?php echo json_encode($product_images); ?>")
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


            console.log($('meta[name="csrf-token"]').attr('content'));

           ClassicEditor
            .create( document.querySelector( '#editor' ), {
                ckfinder: {
                    uploadUrl: {
                        url:'/ckUpload',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'XcsrfToken': $('meta[name="csrf-token"]').attr('content')
                            // Authorization: 'Bearer <JSON Web Token>'
                        }
                    },
                }

            }  )
            .catch( error => {
                console.error( error );
            } );

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
