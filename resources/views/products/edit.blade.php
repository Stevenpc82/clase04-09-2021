@extends('layouts.template')
@section('title','Editar producto')
@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center ">
            <div class="col-md-6 text-center">
                <form action="{{route('products.update',$products->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombre producto</label>
                        <input type="text" class="form-control" name="name" value="{{$products->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion del producto</label>
                        <input type="text" class="form-control" name="description" value="{{$products->description}}">
                    </div>
                    <div class="form-group">
                        <label for="">Valor</label>
                        <input type="text" class="form-control" name="precio" value="{{$products->precio}}">
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="text" class="form-control" name="img" value="{{$products->img}}">
                    </div>
                    <div class="form-group">
                        <label for="companies_id">Empresa</label>
                        <select class="form-control" name="companies_id" id="companies_id">
                            @foreach ($companies as $companie)
                                <option value="{{$companie->id}}">{{$companie->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group, p-2">
                        <button class="btn btn-primary">Agregar producto</button>
                        <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
@endsection
