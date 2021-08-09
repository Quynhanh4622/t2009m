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
    <h1 style="text-align: center">List Book</h1>
    <table class="table table-dark table-hover">
        <form action="/search" method="post">
            @csrf
            <div class="col-md-3 form-group">
                <input type="text" placeholder="Search..." class="search-int form-control" id="search" name="search">
            </div>
        </form>
        <thead>
        <tr>
            <th>Book Id</th>
            <th>Author Id</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Pub Year</th>
            <th>Available</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $library)
            <tr>
                <td>{{$library->bookId}}</td>
                <td>{{$library->authorId}}</td>
                <td>{{$library->title}}</td>
                <td>{{$library->ISBN}}$</td>
                <td>{{$library->pub_year}}</td>
                <td>{{$library->available}}</td>
                <td>
                    <a href="/library/edit/{{$library->bookId}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="/library/delete/{{$library->bookId}}"
                       onclick="return confirm('bạn chắc chắn muốn xóa chứ?')">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@section('js')
    <script>
        const search = document.getElementById('search');
        search.onkeypress = function (library){
            if(library.key == 'Enter'){
                list.submit();
            }
        }
    </script>
@endsection
</body>
</html>
