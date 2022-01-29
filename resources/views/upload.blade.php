<!-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Google Drive Integration in Laravel </title>
    </head>
    <body>
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <br><br><br>
                   <form action="/uploadfile" method="post" enctype="multipart/form-data">
                @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="from-control" placeholder ="name">
                        </div>
                        <div class="form-group">
                        <input type="file" class="form-control " name="thing" id="">
                        </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
               </div>
           </div>
       </div>
    </body>
</html> -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
          <input type="text" id="name" name="name" class="form-control" id="formControlInput" placeholder="name@example.com">
          </div>
          <div class="from-group">
          <label for="formFile" class="form-label">file input</label>
          <input class="form-control" type="file" id="formFile" name="thing">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
