<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.pages.css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.pages.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        @include('layouts.pages.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @include('layouts.pages.body')

    <!-- Bootstrap core JavaScript-->
    
    @include('layouts.pages.script')

</body>

</html>