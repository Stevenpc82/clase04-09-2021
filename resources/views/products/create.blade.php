@extends('layouts.template')
@section('title','Nuevo producto')
@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center ">
            <div class="col-md-6 text-center">
                <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nombre producto</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion del producto</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="">Valor</label>
                        <input type="text" class="form-control" name="precio">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Seleccione el archivo</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="companies_id">Empresa</label>
                        <select class="form-select" name="companies_id" id="companies_id">
                            @foreach ($companies as $companie)
                                <option value="{{$companie->id}}">{{$companie->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group, p-2">
                        <button class="btn btn-primary">Agregar producto</button>
                    </div>
                </form>
            </div>
@endsection
