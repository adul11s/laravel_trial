@extends('layout.main')
@section('title', 'Trial Laravel')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class= "mt-3">Form Add Product CRUD</h1>
                <form method="post"action="/product">
                @csrf
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Product Name" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_type">Product Type</label>
                        <input type="text" class="form-control @error('product_type') is-invalid @enderror" id="product_type" placeholder="Product Type" name="product_type" value="{{old('product_type')}}">        
                        @error('product_type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" name="price" value="{{old('price')}}">
                        @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"> Add Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
    