<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
{{--Nadvar--}}

    <nav class="navbar navbar-light bg-dark">
        <div class="container justify-content-center">
            <h1 class="navbar-brand mb-0 text-white ">SENA</h1>
        </div>
    </nav>
</div>
<hr>
{{--End Nadvar--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" >
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark " style="height: max-content">
                <a href="/"
                   class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <h2 class="fs-4">Gestion Empresarial</h2>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{route('companies.index')}}" class="nav-link bi  me-2" aria-current="page" width="16" height="16">
                            Empresas
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{route('products.index')}}" class="nav-link bi  me-2" aria-current="page" width="16" height="16">
                            Productos
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{route('companies.create')}}" class="nav-link bi  me-2" aria-current="page" width="16" height="16">
                            Ingresar nueva empresa
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{route('products.create')}}" class="nav-link bi  me-2" aria-current="page" width="16" height="16">
                            Ingresar nuevo producto
                        </a>
                    </li>
                </ul>
                <hr>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="text-muted">&copy; 2021 Stiven Pineda, Inc</span>
    </footer>
</div>

</body>

</html>
