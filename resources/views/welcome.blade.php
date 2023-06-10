<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Sending Email</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">




    </head>
    <body>
        <div class="container box w-75">
            <h1 class="text-center"><span class="text-danger">Laravel</span> Sending Email</h1>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <ul>
                        @foreach ($errors as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            <form action="sendemail" method="post">
                <div class="form-group">
                    <label for="Full Name">Full Name</label>
                    <input type="text" name="fullname" class="form-control  ">
                </div>
                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type="text" name="email" class="form-control  ">
                </div>
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" name="subject" class="form-control  ">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="message"  cols="10" rows="5" class="form-control"></textarea>
                </div><br>
                <div class="form-group">
                    <input type="submit" name="send" class="btn btn-outline-primary" value="Send">
                </div>
            </form>
        </div>


    </body>
</html>
