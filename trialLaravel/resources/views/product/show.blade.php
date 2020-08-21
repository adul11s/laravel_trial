@extends('layout.main')
@section('title', 'Trial Laravel')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class= "mt-3">Detail Product CRUD</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$product->product_type}}</h6>
                        <p class="card-text">Rp {{$product->price}}</p>
                        
                        <a href="{{$product->id}}/edit"" class="btn btn-primary">edit</a>
                        <form action="{{$product->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        <a href="/product" class="card-link">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    