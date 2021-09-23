@extends('dashboard.layouts.master')

@section('page_content')
<section class="content-main">
    <div class="row">
        <div class="col-12">
            <div class="content-header">
                <h2 class="content-title"> Edit Product Details </h2>
                <div>
                    <a  href="{{ route('products.index') }}" class="btn btn-md rounded font-sm hover-up">   Show All Products </a>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Product Information</h4>
                </div>
                <form method="POST" action="{{ route('products.update'  , ['product' => $product->id ] ) }}" enctype="multipart/form-data" >
                    <div class="card-body">
                        @csrf
                        @method('PATCH')


                        <div class="mb-4">
                            <label  class="form-label">Front image</label>
                            <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image_back"  >
                            @error('image')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>

                        <img src="{{ $product->image_path_back }}" class="imageback" width="200">


                        <div class="mb-4">
                            <label  class="form-label">Back image</label>
                            <input type="file"  class="form-control @error('images') is-invalid @enderror" name="image_front"  >
                            @error('images')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>

                        <img src="{{ $product->image_path_front }}" class="imagefront" width="200">

                        <div class="input-group my-3">
                              <input type="color" class="form-control" id="imagecolor" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" id="add-input-color" data-id="10" type="button"><i class="fa fa-plus"></i></button>
                              </div>
                        </div>

                        <div id="color-product">
                            @foreach ($product_color as $color)

                            <div id="product-reove-{{ $color->id }}" class="input-group product-remove mb-3">
                                <input type="color" name="color[]" value="{{ $color->color }}" class="form-control" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger remove-color-product" id="add-input-color" onclick="document.getElementsByClassName('product-remove').onClick();" data-id="{{ $color->id}}" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                                
                            @endforeach

                        </div>

                        <div class="my-4">
                            <label for="product_name" class="form-label">  Category  </label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected="selected"' : '' }} > {{ $category->name }} </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label"> Arabic Name </label>
                            <input type="text"  class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ $product->name_ar }}" >
                            @error('name_ar')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label"> English  Name </label>
                            <input type="text"  class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ $product->name_en }}" >
                            @error('name_en')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>

{{--                         <div class="mb-4">
                            <label for="product_name" class="form-label">  Sort </label>
                            <input type="number"  class="form-control @error('sort') is-invalid @enderror" name="sort" value="{{ $product->sort }}" >
                            @error('sort')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div> --}}


                        <div class="mb-4">
                            <label for="product_name" class="form-label">  Price </label>
                            <input type="number"  class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" >
                            @error('price')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="col-sm-12 mb-3">
                            <label class="form-label"> Activation </label>
                            <select name="active" class="form-select">
                                <option value="1" {{ $product->active == 1 ? 'selected="selected"' : '' }} > Enabled </option>
                                <option value="0" {{ $product->active == 0 ? 'selected="selected"' : '' }} > Disabled </option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label for="product_name" class="form-label"> Arabic Description </label>
                            <textarea   class="form-control @error('description_ar') is-invalid @enderror" name="description_ar"> {{  $product->description_ar }} </textarea>
                            @error('description_ar')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label"> English  Description </label>
                            <textarea   class="form-control @error('description_en') is-invalid @enderror" name="description_en"> {{  $product->description_en }} </textarea>
                            @error('description_en')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>



                    </div>
                    <div class="card-footer">
                        <button class="btn btn-md rounded font-sm hover-up" style="float:right">   Edit  <i class="fas fa-edit"></i>  </button>
                        <a  class="btn btn-md rounded font-sm hover-up"><i class="fas fa-arrow-left"></i>  back  </a>

                    </div>
                </form>
            </div> <!-- card end// -->

        </div>
    </div>
</section> <!-- content-main end// -->
@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#sortable" ).sortable();
} );

    $(document).ready(function() {

        $('#add-input-color').on('click', function(e) {
            e.preventDefault();
            
            var id  = $(this).data('id');
            var iid = ++id;
            var id  = $(this).data('id',iid);


            $('#color-product').append('<div id="product-reove-'+iid+'" class="input-group mb-3"><input type="color" name="color[]" class="form-control" aria-describedby="basic-addon2"><div classinput-group-append"><button class="btn btn-danger remove-color-product" id="add-input-color" data-id="'+iid+'" type="button"><i class="fa fa-times"></i></button></div></div>');

        });//end of color

        $(document).on('click','.remove-color-product',function (e) {
            e.preventDefault();
            var id  = $(this).data('id');

            $(this).remove();

        });

        $(document).on('change', '#imageback', function(e) {
            e.preventDefault();

            $('.imageback').attr('src',window.URL.createObjectURL(this.files[0]));

        });//end of change image

        $(document).on('change', '#imagefront', function(e) {
            e.preventDefault();

            $('.imagefront').attr('src',window.URL.createObjectURL(this.files[0]));

        });//end of change image

        $(document).on('change', '#imagecolor', function(e) {
            e.preventDefault();

            var val = $(this).val();

            $('.imageback').css('background',val);
            $('.imagefront').css('background',val);

        });//end of change image

    });//end of document redy
</script>

@endsection