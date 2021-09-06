@extends('layouts.template')
@section('title','Detalles')
@section('content')
    <div>
        <div class="p-5 bg-light border ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Nombre empresa: {{$companies->name}}</h2>
                    </div>
                </div>
                <hr>
            </div>
            <h4>NIT:</h4>
            <p>{{$companies->nit}}</p>
            <br>

            <div class="row justify-content-center">
                <a href="{{route('products.create')}}" class="btn btn-outline-secondary col-md-3" type="button">Ingresar producto a esta empresa</a>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
