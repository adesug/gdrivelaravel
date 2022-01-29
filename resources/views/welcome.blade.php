
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
                   <form action="/upload" method="post" enctype="multipart/form-data">
                @csrf
                        <input type="file" class="form-control " name="thing" id="">
                        <br>
                        <input type="submit" class="btn btn-sm btn-block btn-danger " value="upload" name="" id="">
                    </form>
               </div>
           </div>
       </div>
    </body>
</html>
