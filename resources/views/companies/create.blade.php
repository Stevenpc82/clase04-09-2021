@extends('layouts.template')
@section('title','Nueva empresa')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <form action="{{route('companies.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre Empresa</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Nit</label>
                        <input type="text" class="form-control" name="nit">
                        <br>
                        <div class="form-group, p-2">
                            <button class="btn btn-primary">Agregar nueva empresa</button>
                        </div>
                    </div>
                </form>
            </div>
@endsection
