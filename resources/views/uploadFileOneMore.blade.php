<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h1>Upload File One More</h1>
            </div>
            <div class="card-body">
                <form action="/UploadFileMore" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 1</label>
                        <input type="text" id="name_1" name="name_1" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 1</label>
                        <input class="form-control" type="file" id="formFile" name="thing_1">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 2</label>
                        <input type="text" id="name_2" name="name_2" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 2</label>
                        <input class="form-control" type="file" id="formFile" name="thing_2">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 3</label>
                        <input type="text" id="name_3" name="name_3" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 3</label>
                        <input class="form-control" type="file" id="formFile" name="thing_3">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 4</label>
                        <input type="text" id="name_4" name="name_4" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 4</label>
                        <input class="form-control" type="file" id="formFile" name="thing_4">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 5</label>
                        <input type="text" id="name_5" name="name_5" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 5</label>
                        <input class="form-control" type="file" id="formFile" name="thing_5">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 6</label>
                        <input type="text" id="name_6" name="name_6" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 6</label>
                        <input class="form-control" type="file" id="formFile" name="thing_6">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 7</label>
                        <input type="text" id="name_7" name="name_7" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 7</label>
                        <input class="form-control" type="file" id="formFile" name="thing_7">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 8</label>
                        <input type="text" id="name_8" name="name_8" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 8</label>
                        <input class="form-control" type="file" id="formFile" name="thing_8">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 9</label>
                        <input type="text" id="name_9" name="name_9" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 9</label>
                        <input class="form-control" type="file" id="formFile" name="thing_9">
                    </div>

                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name 10</label>
                        <input type="text" id="name_10" name="name_10" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input 10</label>
                        <input class="form-control" type="file" id="formFile" name="thing_10">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 1</th>
                    <th scope="col">Link 1</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_1}}</td>
                    <td>{{$item -> link_1}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 2</th>
                    <th scope="col">Link 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_2}}</td>
                    <td>{{$item -> link_2}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 3</th>
                    <th scope="col">Link 3</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_3}}</td>
                    <td>{{$item -> link_3}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 4</th>
                    <th scope="col">Link 4</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_4}}</td>
                    <td>{{$item -> link_4}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 5</th>
                    <th scope="col">Link 5</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_5}}</td>
                    <td>{{$item -> link_5}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 6</th>
                    <th scope="col">Link 6</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_6}}</td>
                    <td>{{$item -> link_6}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 7</th>
                    <th scope="col">Link 7</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_7}}</td>
                    <td>{{$item -> link_7}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 8</th>
                    <th scope="col">Link 8</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_8}}</td>
                    <td>{{$item -> link_8}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 9</th>
                    <th scope="col">Link 9</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_9}}</td>
                    <td>{{$item -> link_9}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name 10</th>
                    <th scope="col">Link 10</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name_10}}</td>
                    <td>{{$item -> link_10}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
