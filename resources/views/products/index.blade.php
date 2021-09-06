@extends('layouts.template')
@section('title','Productos')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del producto</th>
                            <th>Descripción</th>
                            <th>Valor</th>
                            <th>Imagen</th>
                            <th>Distribuidor</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $products)
                            <tr>
                                <td>{{$products->id}}</td>
                                <td>{{$products->name}}</td>
                                <td>{{$products->description}}</td>
                                <td>{{$products->precio}}</td>
                                <td><img height="50px" width="50px"src="{{asset('/storage/images/products/'.$products->img)}}" alt=""></td>
                                <td>{{$products->companies_id}}</td>
                                <td>
                                    <form action="{{route('products.destroy',$products->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('products.show',$products->id)}}"
                                           class="btn btn-sm btn-outline-info">Detalles</a>
                                        <a href="{{route('products.edit',$products->id)}}"
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
