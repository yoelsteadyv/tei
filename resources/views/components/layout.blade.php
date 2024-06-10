<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEI | {{ $title }}</title>
    {{-- ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="shortcut icon" href="{{ asset('img/Logo TAI.JPG') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/@icon/dripicons/dripicons.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <style>
        .fontawesome-icons {
            text-align: center;
        }

        article dl {
            background-color: rgba(0, 0, 0, .02);
            padding: 20px;
        }

        .fontawesome-icons .the-icon {
            font-size: 24px;
            line-height: 1.2;
        }
    </style>

    {{-- sweetelert --}}
    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('mazer/assets/compiled/css/extra-component-sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('mazer/assets/compiled/css/table-datatable.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('mazer/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('mazer/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('mazer/assets/compiled/css/iconly.css') }}">
</head>

<body>
    <script src="{{ asset('mazer/assets/static/js/initTheme.js') }}"></script>
    <div id="app">

        <x-sidebar />

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            {{ $slot }}

            {{-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                            by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>

    <script src="{{ asset('mazer/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('mazer/assets/compiled/js/app.js') }}"></script>

    {{-- flatpickr datepicker --}}
    <script src="{{ asset('mazer/assets/extensions/flatpickr/flatpickr.min.js') }}""></script>
    <script src="{{ asset('mazer/assets/static/js/pages/date-picker.js') }}""></script>

    {{-- datatables --}}
    <script src="{{ asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/simple-datatables.js') }}"></script>

    {{-- parslay --}}
    <script src="{{ asset('mazer/assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/extensions/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/parsley.js') }}"></script>

    {{-- sweetalert --}}
    {{-- <script src="{{ asset('mazer/assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>>
    <script src="{{ asset('mazer/assets/static/js/pages/sweetalert2.js') }}"></script>> --}}

    <!-- Need: Apexcharts -->
    {{-- <script src="{{ asset('mazer/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/dashboard.js') }}"></script> --}}

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.pathname;
            const menuItems = document.querySelectorAll('.sidebar-item a');
            const menuItemSub = document.querySelectorAll('.sidebar-item a');
            const menuHasItems = document.querySelectorAll('.sidebar-item a ul li a');

            menuItems.forEach(item => {
                const href = item.getAttribute('href');

                // Periksa apakah URL saat ini sama persis dengan href item menu, atau apakah dimulai dengan href item menu (disesuaikan dengan "/barang-masuk")
                if (currentUrl === href || currentUrl.startsWith(href + '/dashboard') || (href ===
                        '/maincustomer' && currentUrl.startsWith(href + '/maincustomer'))) {
                    item.parentElement.classList.add('active');
                }
            });
            menuHasItems.forEach(item => {
                const href = item.getAttribute('href');

                // Periksa apakah URL saat ini sama persis dengan href item menu, atau apakah dimulai dengan href item menu (disesuaikan dengan "/barang-masuk")
                if (currentUrl === href || currentUrl.startsWith(href + '/jenisbarang') || (href ===
                        '/satuanbarang' && currentUrl.startsWith(href + '/satuanbarang'))) {
                    item.parentElement.classList.add('active');
                }
            });
        });
    </script> --}}
</body>

</html>
