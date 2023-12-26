<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin Dashboard</title>


    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-iconpicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

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

    <div class="container mt-2">

        <div class="row">
            <div class="col-md-12 text-end">

                <li class="dropdown">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="mb-3 mobile-logout btn btn-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                this.closest('form').submit()"
                            class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </form>

                </li>
            </div>
            <h2 class="text-center">Online Bus Ticket</h2>
        </div>
    </div>

    <div class="container my-3">

        @foreach ($trip as $item)
            <div class="row ">

                <div class="col-md-6 home-form m-auto">
                    <h5 class="mb-3">Select Your Destination</h5>
                    <form action="{{ route('ticket.buy') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">From</label>
                                    <select name="from" class="form-control">
                                        <option value="{{ $item->from }}">{{ $item->from }}</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="" class="form-label">To</label>
                                    <select name="to" class="form-control">

                                        <option value="{{ $item->to }}">{{ $item->to }}</option>

                                    </select>

                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-check-label" for="">Date</label>
                                <input name="date" type="date" class="form-control" value="{{ $item->date }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Buy Tickets</button>
                        </div>
                </div>

                <div class="col-md-5 seat">
                    <h5 class="mb-3">Select Your Sit</h5>

                    <div class="row">
                        @for ($i = 1; $i <= $item->seat_capacity; $i++)
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="a{{ $i }}"
                                        id="seat{{ $i }}" name="seat[]">
                                    <label class="form-check-label"
                                        for="seat{{ $i }}">A{{ $i }}</label>
                                </div>
                            </div>
                        @endfor
                    </div>

                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <script src="{{ asset('backend/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('backend/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('backend/assets/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.7.0/tinymce.min.js"></script>

    <!-- Page Specific JS File -->
    <script src=" {{ asset('backend/assets/js/page/index-0.js') }}"></script>

    <!-- Template JS File -->
    <script src=" {{ asset('backend/assets/js/scripts.js') }}"></script>
    <script src=" {{ asset('backend/assets/js/custom.js') }}"></script>



    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}", "Error");
            </script>
        @endforeach
    @endif

</body>

</html>
