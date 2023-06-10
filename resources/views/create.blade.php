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
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    <div class="card px-5 mt-3 shadow">
                        <h1 class="text-center pt-4"><span class="text-success">Create</span> Product</h1> <hr>

                        <form action="/post" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Full Name">nom</label>
                                <input type="text" name="nom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Body</label>
                                <textarea name="body"  cols="10" rows="5" class="form-control"></textarea>
                            </div><br>

                            <div class="form-group">
                               <button class="btn btn-success col-md-3" type="submit">Submit</button>
                            </div><br>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </body>
</html>
