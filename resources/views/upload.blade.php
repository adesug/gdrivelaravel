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
                <h1>Upload File</h1>
            </div>
            <div class="card-body">
                <form action="/uploadfile" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="from-group">
                        <label for="formControlInput" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" id="formControlInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="from-group">
                        <label for="formFile" class="form-label">file input</label>
                        <input class="form-control" type="file" id="formFile" name="thing">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">pilih directory penyimpanan</label>
                        <select name="directory" id="" class="form-control">
                            <option selected disabled value="">Pilih Directory</option>
                            @foreach ($directory as $d)
                            <option value="{{$d->directory_id}}">{{$d->name}}</option>  
                            @endforeach
                        </select>
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
                    <th scope="col">Name</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showdata as $item)
                <tr>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> link}}</td>
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
