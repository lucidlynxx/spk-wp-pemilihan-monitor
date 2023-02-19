<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <link href="/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        @livewireStyles
    </head>
    <body class="sb-nav-fixed">
      {{-- Navbar --}}
        @include('dashboard.partials.navbar')

        <div id="layoutSidenav">
          {{-- Sidebar --}}
            @include('dashboard.partials.sidebar')

            <div id="layoutSidenav_content">
              {{-- Content --}}
                @yield('container')

                {{-- Footer --}}
                @include('dashboard.partials.footer')
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	      <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
	      <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        @include('sweetalert::alert')
        @livewireScripts
        @stack('table')
        @stack('slug')
        @stack('delete')
        @stack('reset')
        @stack('deleteUser')
    </body>
</html>
