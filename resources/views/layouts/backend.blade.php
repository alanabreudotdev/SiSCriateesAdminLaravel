<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Morris Charts CSS -->
    <link href="{{asset('vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
	
    <!-- Toggles CSS -->
    <link href="{{asset('vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="{{asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        @include('parts.topbar_backend')
	
        @include('parts.menu_backend')

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                @yield('content')
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Desenvolvido por <a href="https://www.criatees.com.br/" class="text-dark" target="_blank">Criatees</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Rede Sociais</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->
    
    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('dist/js/toggle-data.js')}}"></script>
	
	<!-- Toastr JS -->
    <script src="{{asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
    
	<!-- Counter Animation JavaScript -->
	<script src="{{asset('vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="{{asset('vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('vendors/morris.js/morris.min.js')}}"></script>
	
	<!-- Easy pie chart JS -->
    <script src="{{asset('vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
	
	<!-- Flot Charts JavaScript -->
    <script src="{{asset('vendors/flot/excanvas.min.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('vendors/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="{{asset('vendors/echarts/dist/echarts-en.min.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{asset('dist/js/init.js')}}"></script>
    <script src="{{asset('dist/js/dashboard2-data.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.1/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.crud-richtext'
        });
    </script>
    <script type="text/javascript">
        $(function () {
            // Navigation active
            $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
        });
    </script>

    @yield('scripts')
    @yield('js_after')
	
</body>

</html>