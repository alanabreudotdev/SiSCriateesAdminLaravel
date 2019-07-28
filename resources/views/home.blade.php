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
     
      <script src="{{asset('dist/js/dashboard-data.js')}}"></script>
@endsection
