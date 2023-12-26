@php

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bus Ticket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        .home-form {
            background-color: rgba(206, 206, 206);
            padding: 30px;
            border-radius: 10px;
        }

        .seat {
            background-color: rgba(206, 206, 206);
            padding: 30px;
            border-radius: 10px;
            margin-left: 50px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <h2 class="text-center mb-5">For Buying Ticket Login First</h2>
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="h6">
                        {{  }}
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

</body>

</html>
