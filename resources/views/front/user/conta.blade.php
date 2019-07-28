@extends('layouts.front')

@section('content')
    <!-- Container -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12 pa-0">
                <div class="profile-cover-wrap overlay-wrap">
                    <div class="profile-cover-img" style="background-image:url('{{ asset('img/trans-bg.jpg')}}"></div>
                    <div class="bg-overlay bg-trans-dark-60"></div>
                    <div class="container-fluid profile-cover-content py-50">
                        <div class="hk-row"> 
                            <div class="col-lg-12">
                                <div class="media align-items-center">
                                    <div class="media-img-wrap  d-flex">
                                        <div class="avatar">
                                                <img src="@if(Auth::user()->photo_url) {{ asset('storage'.Auth::user()->photo_url) }} @else {{ asset('dist/img/img-thumb.jpg')}} @endif" alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                    <div class="text-white text-capitalize display-6 mb-5 font-weight-400">{{ Auth::user()->name }}</div>
                                        <div class="font-14 text-white"><span class="mr-5"><span class="font-weight-500 pr-5">{{ Auth::user()->email }}</span></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-content mt-sm-60 mt-30">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <div class="container-fluid">
                            <div class="hk-row">
                                <!-- MENU PERFIL -->
                                @include('front.user.menu')
                                <!-- FIM MENU PERFIL -->
                                <div class="col-lg-8">
                                    <div class="card card-profile-feed">
                                        <div class="card-header card-header-action">
                                            <div class="media align-items-center">
                                              
                                                <div class="media-body">
                                                    <h3 class="text-capitalize font-weight-500 text-dark">Conta</h3>
                                                    <div class="font-13"> Edite suas configurações de conta e altere sua senha aqui. </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                        <div class="col-sm">
                                        <form method="POST" action="{{ route('usuario.conta.post')}}">
                                            @csrf
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                <input class="form-control" value="{{ Auth::user()->email }}" disabled placeholder="seu@email.com" type="email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Senha Atual</label>
                                                    <input class="form-control" id="password_old" name="password_old" placeholder="Senha" type="password">
                                                </div>

                                                <div class="form-group">
                                                        <label for="email">Nova Senha</label>
                                                        <input class="form-control" id="password" name="password" placeholder="Senha" type="password">
                                                </div>

                                                <div class="form-group">
                                                        <label for="email">Confirmar Nova Senha</label>
                                                        <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Senha" type="password">
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-primary text" type="submit">Alterar Senha</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->
@endsection
@section('js_after')
    
@endsection