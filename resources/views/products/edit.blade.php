@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Image:</strong>
                    <input type="file" class="form-control" style="" name="product_image" value="{{ $product->product_image }}">
                    <br>
                    <strong>Product Name:</strong>
                    <input type="text" class="form-control" style="" name="product_name" value="{{ $product->product_name }}">
                </div>
                <div class="form-group py-3">
                    <strong>Product Model:</strong>
                    <input type="text" class="form-control" style="" name="product_model" value="{{ $product->product_model }}">
                </div>
                <div class="form-group">
                    <strong>Product Description:</strong>
                    <textarea class="form-control" style="height:80px;resize:none;" name="product_description" placeholder="">{{ $product->product_description }}</textarea>
                </div>
                <div class="form-group py-3">
                    <strong>Product Specimen Type:</strong>
                    <input type="text" class="form-control" style="" name="product_specimen_type" value="{{ $product->product_specimen_type }}">
                </div>
                <div class="form-group py-3">
                    <strong>Product Manufacturer:</strong>
                    <input type="text" class="form-control" style="" name="product_manufacturer" value="{{ $product->product_manufacturer }}">
                </div>
                <div class="form-group py-2">
                    <input class="form-check-input me-1" name="enabled" type="checkbox" value="1" aria-label="..." {{ $product->enabled == 1 ? 'checked' : '' }}>
                    Enable
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                <a class="btn btn-sm btn-primary" href="{{ route('products.index') }}"> Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection