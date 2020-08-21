@extends('layout.main')
@section('title', 'Trial Laravel')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class= "mt-3">Simple Product CRUD</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <th scope="col">#</th>                    
                        <th scope="col">Name</th>                    
                        <th scope="col">Product Type</th>                    
                        <th scope="col">Price</th>
                        <th scoper="col">Action</th>                    
                    </thead>
                    <tbody>
                    @foreach($product as $product)
                        <tr>
                            <th scope="row">{{$loop -> iteration}}</th>
                            <td> {{$product -> name}}</td>
                            <td>{{$product -> product_type}}</td>
                            <td>{{$product -> price}}</td>
                            <td>
                            <a href=""class="badge badge-succes">edit</a>
                            <a href=""class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
    