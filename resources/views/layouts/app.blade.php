<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{url('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{url('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('assets/images/logo/favicon.png')}}" type="image/png">
    
    <link rel="stylesheet" href="{{url('assets/css/shared/iconly.css')}}">
    <link rel="stylesheet" href="{{url('assets/extensions/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/pages/simple-datatables.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
</head>

<body>
    <div id="app">
        
        @include('components.sidebar')
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            @yield('content')
            
            @include('components.footer')
            
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var table = $('#table1').DataTable( {
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            } );
        } );
    </script>
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/js/app.js')}}"></script>
    
    <!-- Need: Apexcharts -->
    <script src="{{url('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/js/pages/dashboard.js')}}"></script>
    
    {{-- Datatable --}}
    <script src="{{url('assets/extensions/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="{{url('assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
    <script src="{{url('assets/js/pages/simple-datatables.js')}}"></script>
    <script src="{{url('assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
</body>

</html>
