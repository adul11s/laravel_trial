@extends('layout.main')
@section('title', 'Trial Laravel')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class= "mt-3">Simple Product CRUD</h1>
                <a href="/product/create" class="btn btn-primary my-2">Add Product</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table">
                    <thead class="thead-dark">
                        <th scope="col">#</th>                    
                        <th scope="col">Name</th>                    
                        <th scoper="col">Action</th>                    
                    </thead>
                    <tbody>
                    @foreach($product as $product)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td> {{$product->name}}</td>
                            <td>
                            <a href="/product/{{$product->id}}"class="badge badge-info">detail</a>
                            
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
    