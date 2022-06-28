<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="col-10 mr-auto ml-auto">
        @if (count($precios) > 0)
            <div class="row">
                @foreach ($precios as $precios)
                    <div class="card" style="width: 18rem; margin: 20px">
                        <img src="{{$precios->foto}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$precios->producto}}</h5>
                            <p class="card-text">{{$precios->descripcion}}</p>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-title">Proveedor: {{$precios->proveedor}}</h5>
                            <p class="card-text">{{$precios->descripcion}}</p>
                            <h6 class="card-title">Precio: Q.{{$precios->precio}}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>No hay precios existentes</h2>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
