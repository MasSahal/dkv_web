<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/fontawesome/all.min.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/app.css">

    @yield('css')
    <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('admin.template.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('heading')</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('backend') }}/js/jquery.js"></script>
    <script src="{{ asset('backend') }}/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('backend') }}/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('backend') }}/vendors/apexcharts/apexcharts.js"></script>
    {{-- <script src="{{ asset('backend') }}/js/pages/dashboard.js"></script> --}}

    <script src="{{ asset('backend') }}/js/main.js"></script>
    <script src="{{ asset('backend') }}/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('backend') }}/vendors/fontawesome/all.min.js"></script>
    @yield('js')
</body>

</html>
