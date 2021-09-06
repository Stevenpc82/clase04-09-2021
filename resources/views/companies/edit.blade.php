@extends('layouts.template')
@section('title','Editar compañia')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <form action="{{route('companies.update',$companies->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombre Empresa</label>
                        <input type="text" class="form-control" name="name" value="{{$companies->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nit</label>
                        <input type="text" class="form-control" name="nit" value="{{$companies->nit}}">
                        <br>
                        <div class="form-group, p-2">
                            <button class="btn btn-primary">Actializar datos</button>
                            <a href="{{route('companies.index')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
@endsection
