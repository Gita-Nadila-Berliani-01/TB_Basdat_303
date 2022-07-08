<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.head')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('admin.layout.header')
        @include('admin.layout.sidebar')
        <!-- Page Content -->

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2020 &copy; Myadmin brought to you by <a
                href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
    </div>
</body>
@include('admin.layout.script')
@yield('tambah-script')

</html>
