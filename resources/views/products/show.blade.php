@extends('layouts.template')
@section('title','Detalles')
@section('content')
    <div>
        <div class="p-5 bg-light border ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Nombre Producto: {{$products->name}}</h2>
                    </div>
                    <div class="col-md-2">

                        <img src="{{asset('/storage/images/products/'.$products->img)}}" height="100%" width="100%">

                    </div>
                </div>
                <hr>
            </div>
            <h4>Descripcion:</h4>
            <p>{{$products->description}}</p>
            <br>
            <h4>Precio:</h4>
            <p>{{$products->precio}}</p>
            <br>
            <h4>Compañia:</h4>
            <p>{{$products->companies_id}}</p>
            <div class="row justify-content-center">
                <a href="{{route('companies.index')}}" class="btn btn-outline-secondary col-md-3" type="button">Ver empresas registradas</a>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
