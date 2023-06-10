<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Product QRCODE</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">




    </head>
    <body>
        <div class="container mt-5 ">
            <h1 class="alert alert-primary text-center">List de Product</h1><br>
            <a href="/create" class="btn btn-outline-success">Ajouter Product</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">nom</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">CODE</th>
                        <th scope="col">BODY</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td class="text-success">{{ $item->price }} DH</td>
                            <td>{!! DNS2D::getBarcodeHTML("$item->product_code",'QRCODE') !!}P- {{ $item->product_code }}</td>
                            {{-- QRCODE --}}
                            {{-- DATAMATRIX --}}
                            <td>{{ $item->body }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </body>
</html>
