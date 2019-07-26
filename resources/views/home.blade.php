@extends('layouts.front')

@section('content')
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-xl-12">
                        <div class="card">
                                <div class="card-header">Dashboard</div>
                
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                        
                                    You are logged in!
                                </div>
                            </div>
                </div>
            
        </div>
    </div>
    </div>
</div>
@endsection

@section('js_after')
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
      
      <!-- Counter Animation JavaScript -->
      <script src="{{asset('vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>
      
      <!-- Easy pie chart JS -->
      <script src="{{asset('vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
      
      <!-- Sparkline JavaScript -->
      <script src="{{asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
      
      <!-- Morris Charts JavaScript -->
      <script src="{{asset('vendors/raphael/raphael.min.js')}}"></script>
      <script src="{{asset('vendors/morris.js/morris.min.js')}}"></script>
     
      <!-- EChartJS JavaScript -->
      <script src="{{asset('vendors/echarts/dist/echarts-en.min.js')}}"></script>
      
      <!-- Peity JavaScript -->
      <script src="{{asset('vendors/peity/jquery.peity.min.js')}}"></script>
     
      <!-- Toastr JS -->
      <script src="{{asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
      
      <!-- Init JavaScript -->
      <script src="{{asset('dist/js/init.js')}}"></script>
      <script src="{{asset('dist/js/dashboard-data.js')}}"></script>
@endsection
