<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="mt-5" style="">
            <form action="/loader" method="post" enctype="multipart/form-data">
            @csrf
                <div class="input-group m-3">
                    <input type="file" class="form-control" id="file1" name="thing_1"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <div class="input-group m-3">
                    <input type="file" class="form-control" id="file2" name="thing_2"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <div class="input-group m-3">
                    <input type="file" class="form-control" id="file3" name="thing_3"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <div class="text-center">
                    <button type="submit" id= "button" class="btn btn-primary" disabled>Upload</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>\

    <!-- logic button -->
    <script>
        $('input[type=file]').change(function () {
            if ($('#file1').val() != '' && $('#file2').val() != '' && $('#file3').val() != '' ) 
            {
                $('#button').attr('disabled', false);
            }
        })
    </script>
<script>
    document.querySelector("#button").addEventListener('click', function () {
        Swal.fire({
            title: 'Upload Prosses',
            html: 'I will close in <b></b> milliseconds.',
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
                Swal.showLoading()
            },
        }).then((result) => {
            
        })
    });

</script>
</body>

</html>
