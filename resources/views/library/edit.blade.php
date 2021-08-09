<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Edit Library</h1>
    <form class="pt-4" action="" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Book Id:</label>
                    <input type="text" value="{{$edit->bookId}}" class="form-control" name="bookId">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Author Id:</label>
                    <input type="text" value="{{$edit->authorId}}" class="form-control" name="authorId">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" value="{{$edit->title}}" class="form-control" name="title">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>ISBN:</label>
                    <input type="text" value="{{$edit->ISBN}}$" class="form-control" name="ISBN">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Pub Year:</label>
                    <input type="text" value="{{$edit->pub_year}}" class="form-control" name="pub_year">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Available:</label>
                    <input type="text" value="{{$edit->available}}" class="form-control" name="available">
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary pt-4">Submit</button>
        </div>

    </form>
</div>
</body>
</html>
