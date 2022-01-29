<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>dataGdrive</title>
  </head>
  <body>
   
       

   <div class="body">
       <div class="container-fluid">
           <button class="btn btn-primary mt-3">
               <a class="text-light" href="{{route('tambah')}}">Tambah Data</a>
           </button>
        <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">Nama</th>
                <th scope="col">File(link proposal)</th>
                <th scope="col">aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <button class="btn btn-warning">
                        <a href="" class="text-light">edit</a>
                    </button>
                    <button class="btn btn-danger">
                        <a href="" class="text-light">hapus</a>
                    </button>
                </td>
              </tr>
             
            </tbody>
          </table>
       </div>
   </div>
  </body>
</html>