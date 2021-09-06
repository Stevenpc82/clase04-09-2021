@extends('layouts.template')
@section('title','Bienvenido')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre de la compañia</th>
                            <th>Nit</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($companies as $companies)
                            <tr>
                                <td>{{$companies->id}}</td>
                                <td>{{$companies->name}}</td>
                                <td>{{$companies->nit}}</td>
                                <td>
                                    <form action="{{route('companies.destroy',$companies->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('companies.show',$companies->id)}}"
                                           class="btn btn-sm btn-outline-info">Detalles</a>
                                        <a href="{{route('companies.edit',$companies->id)}}"
                                           class="btn btn-sm btn-outline-warning ">Editar</a>
                                        <button class="btn btn-sm btn-outline-danger submit-prevent-button" type="sumbit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
