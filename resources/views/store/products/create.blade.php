@extends('store.layouts.master')

@section('page_content')
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Add New Product</h2>
            </div>
        </div>

        <form action="{{ route('sellers.store.product') }}" method="post" id="add-product" class="row" enctype="multipart/form-data">
            @csrf
            
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Media</h4>
                    </div>

                    <div class="card-body">

                        <div class="col-sm-12 mb-3">
                            <label class="form-label">Store</label>
                            <select id="stores" name="store_id" class="form-select">
                                @foreach (App\Models\Store::all() as $store)
                                    
                                    <option value="{{ $store->id }}">
                                            {{ $store->name }}
                                    </option>

                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12 mb-3 d-none cat">
                            <label class="form-label">category</label>
                            <select id="Category" name="category_id" class="form-select">
                                @foreach (App\Models\Category::all() as $category)
                                    
                                    <option data-url="{{ route('category.product',$category->id) }}" 
                                            data-id="{{ $category->id }}"
                                            data-method="get"
                                            value="{{ $category->id }}">
                                            {{ $category->name_ar }}
                                    </option>

                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12 mb-3 seller-product d-none">
                            <label class="form-label">product</label>
                            <select id="sellerProduct" name="product_id" class="form-select">
                                    <option>selct product</option>
                            </select>
                        </div>

                        {{-- <div class="center-image-no d-none"></div> --}}

                        <div class="input-upload d-none">
                            <label style="display: table;">Choose image</label>
                            <input class="form-control imageing" type="file" name="logo">
                        </div>

                        {{-- <img src="" style="width: 100px" class="img-thumbnail image-preview" alt=""> --}}

                        <div class="attr-detail attr-color mb-15 d-none">
                            <strong class="mr-10">choose Color</strong>
                            <ul class="list-filter color-filter">
                                <li class="product-color"></li>
                            </ul>

                            <ul class="list-filter color-filter my-3">  
                                <strong class="mr-10">choose Color Client</strong>
                                <li class="product-color"></li>
                            </ul>
                        </div>
                        <div class="row d-none size-logo">
                            <div class="mb-4 col-6">
                                <div class="row gx-2">
                                    <a href="" class="btn btn-light rounded font-sm mr-5 text-body hover-up back-product">back</a>
                                </div>
                            </div>
                            <div class="mb-4 col-6">
                                <div class="row gx-2">
                                    <a href="" class="btn btn-md rounded font-sm hover-up front-product">front</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- card end// -->
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="center-image"></div>

                    </div>
                </div> <!-- card end// -->
                
            </div>

           <div class="input-hiiding">
               <input type="text" name="default_color" id="defaultColor" hidden>
               <input type="text" name="bg_logo" id="canvse" hidden value=""> 
               <img src="" id="bgImage-image">
               <input type="text" name="logo_width"  id="logoWidth" hidden>
               <input type="text" name="logo_height" id="logoHeight" hidden>
               <input type="text" name="translate" id="Translate" hidden>
           </div>

           <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="mb-4 col-6">
                                <label class="form-label">Product title</label>
                                <input type="text" id="title" name="title" placeholder="Type here" class="form-control">
                                <span class="text-danger" id="title-error"></span>
                            </div>
                            <div class="mb-4 col-6">
                                <label class="form-label">price <span class="new-price"></span> </label>
                                <div class="row gx-2">
                                    <input placeholder="$" id="productPrice" name="price" min="200" max="" type="number" class="form-control">
                                    <span class="text-danger" id="price-error"></span>
                                    <input name="selling_price" id="sellingPrice" type="number" hidden>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-4 col-lg-12">
                                <label class="form-label">Tag</label>
                                <input type="text" id="tag" name="tag" class="form-control">
                                <span class="text-danger" id="tag-error"></span>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Full description</label>
                            <textarea placeholder="Type here" id="description" name="description" class="form-control" rows="4"></textarea>
                            <span class="text-danger" id="description-error"></span>
                        </div>

                        <button class="btn btn-md rounded font-sm hover-up publich-product">Publich</button>
                            
                    </div>
                </div> <!-- card end// -->
                
            </div>
        </form>

        </div>
</section> <!-- content-main end// -->
@endsection


@section('scripts')
{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
<script>

    $( function() {
        $( "#sortable" ).sortable();

    });

    $(document).ready(function() {

        $('#stores').on('change', function (e) {
            e.preventDefault();

            $('.cat').removeClass('d-none');            

        });//end fo on change stores


        $('#Category').on('change', function (e) {
            e.preventDefault();

            var $option      = $(this).find(":selected");
            var id           = $option.data('id');
            var url          = $option.data('url');
            var method       = $option.data('method');

            $('#sellerProduct').empty('');
            $('.center-image').empty('');
            $('.product-color').empty('');
            // $('#productPrice').attr('min').val('');
            $('#productPrice').val('');

            $('.size-logo').addClass('d-none');
            $('.seller-product').addClass('d-none');
            $('.input-upload').addClass('d-none');
            $('.attr-color').addClass('d-none');
            
            $.ajax({
                url: url,
                method: method,
                success: function(data) {

                    if (data.length == 0) {
                        
                         $('#sellerProduct').append('<option>No data</option>');

                    }

                    $('.seller-product').removeClass('d-none');
                    
                    $.each(data, function(index, product) {

                         $('#sellerProduct').append('<option>selct product</option><option value="'+product.id+'" data-id="'+product.id+'">'+product.name_ar+'</option>');
                    });
                    
                }//end success ajax

            });//end of ajax

        });//end fo on change Category


        $('#sellerProduct').on('change', function (e) {
            e.preventDefault();

            var $option      = $(this).find(":selected");
            var id           = $option.data('id');
            var url          = "{{ route('show.product') }}";
            var method       = 'post';

            // $('#sellerProduct').empty('');

            $('.size-logo').addClass('d-none');
            // $('.center-image').addClass('d-none');
            
            $.ajax({
                url: url,
                method: method,
                data: {id : id},
                success: function(data) {

                    if (data.product.length == 0) {
                        
                         $('.center-image-no').append('<h4>No data</h4>');

                    }

                    $('.seller-product').removeClass('d-none');
                    $('.input-upload').removeClass('d-none');
                    $('.attr-color').removeClass('d-none');
                    $('.size-logo').removeClass('d-none');
                    
                    $('#productPrice').empty('');
                    $('.product-color').empty('');
                    $('#productPrice').val(data.product.price);
                    // $('#productPrice').attr('min').val('');
                    $('#productPrice').attr('min',data.product.price);

                    $('.center-image').append('<div id="clothe-tshirt-maker"></div>');
                    // $('.center-image').append('<div id="clothe-tshirt-maker"></div>');

                    var bgb = data.product.image_path_back;
                    var bgf = data.product.image_path_front;
                
                    $('#clothe-tshirt-maker').imageMaker({
                        templates:[
                            {url: bgb, title:'Third World Skeptical Kid'},
                            {url: bgf, title:'Third World Skeptical Kid'},
                            ],
                            text_boxes_count:0
                        });

                    // $('#clothe-tshirt-maker').imageMaker();

                    // $('.center-image').empty('');
                    // $('.center-image').append('<img id="bg-image" class="path-front" src="'+data.product.image_path_front+'"><div class="cover-image"></div>');
                    // $('.center-image').append('<img id="bg-image" class="d-none path-back" src="'+data.product.image_path_back+'"><div class="cover-image"></div>');

                    $.each(data.colors, function(index, color) {

                        $('.product-color').append('<a href="" class="btn btn-danger btn-color p-3 mx-2 color-front" data-color="'+color.color+'" style="background-color:'+color.color+';"></a>');
                        $('.product-color').append('<a href="" class="btn btn-danger btn-color p-3 mx-2 color-back d-none" data-color="'+color.color+'" style="background-color:'+color.color+';"></a>');
                    });
                    
                }//end success ajax

            });//end of ajax

        });//end fo on change sellerProduct


        $(document).on('change', '.imageing', function(e) {
            e.preventDefault();

            $('.size-logo').removeClass('d-none');

            $('#blah').remove();

            $('.center-image').append('<img id="blah" name="logo" id="drag-2" class="draggable resize-drag" src="'+window.URL.createObjectURL(this.files[0])+'"/>')

        });//end of change image


        $(document).on('click', '.color-back', function(e) {
            e.preventDefault();

            var bg = $(this).data('color');

            $(".path-back").css('background',bg);
            $('#defaultColor').val(bg);

        });//end of click color-back


        $(document).on('click', '.color-front', function(e) {
            e.preventDefault();

            var bg = $(this).data('color');

            $(".path-front").css('background',bg);
            $('#defaultColor').val(bg);

        });//end of click color-front


        $('#productPrice').on('change', function (e) {
            e.preventDefault();
            var val    = $(this).val();
            var min    = $(this).attr('min');
            var totle  = val - min;

            $('.new-price').html(totle);
            $('#sellingPrice').val(totle);

        });//end of change productPrice


        $(document).on('click', '.back-product', function(e) {
            e.preventDefault();

            $('.path-front').addClass('d-none');
            $('.path-back').removeClass('d-none');

            $('.color-front').addClass('d-none');
            $('.color-back').removeClass('d-none');
            
            $('#bgImage').val('back');

        });//end of back-product


        $(document).on('click', '.front-product', function(e) {
            e.preventDefault();

            $('.path-back').addClass('d-none');
            $('.path-front').removeClass('d-none');

            $('.color-back').addClass('d-none');
            $('.color-front').removeClass('d-none');

            $('#bgImage').val('front');

        });//end of front-product


        $(document).on('submit', '#add-product', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            var url      = $(this).attr('action');
            var method   = $(this).attr('method');
            var items    = $(this).serializeArray();
            var amm_canvas = document.querySelector(".amm_canvas");
            var aa = document.querySelector("#clothe-tshirt-maker");
            var aaa = document.querySelectorAll("#clothe-tshirt-maker");
            console.log(amm_canvas);
            console.log(aaa);
            console.log(aa);
            {{-- var redircte = "{{ route('product.index') }}"; --}}


            
            $.each(items, function(index,item) {

                if (item.name == 'price') {

                    $('#productPrice').removeClass('is-invalid');

                }
                if (item.name == 'description') {

                    $('#description').removeClass('is-invalid');

                }
                
                $('#' + item.name).removeClass('is-invalid');
                $('#' + item.name + '-error').text('');

            });//end of each

            $.ajax({    
                url: url,
                method: method,
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    
                    // location.reload();

                    // document.location.href = redircte;

                }, error: function(data) {

                    $.each(data.responseJSON.errors, function(name,message) {
                        if (name == 'price') {

                            $('#productPrice').addClass('is-invalid');

                        }

                        $('#' + name).addClass('is-invalid');
                        $('#' + name + '-error').text(message);
                        
                    });//end of each
                },
            });//end of ajax

        });//end of add-product submit
        
      
    });//end of document redy
</script>

@endsection