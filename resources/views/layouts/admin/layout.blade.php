<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('meta_extra')

    <title>@yield('meta_title') | Administración</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    {!! HTML::style('static/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

    {!! HTML::style('static/bower_components/font-awesome/css/font-awesome.min.css') !!}

    {!! HTML::style('static/admin/css/animate.css') !!}
    {!! HTML::style('static/admin/css/style.css') !!}
    {!! HTML::style('static/admin/css/custom.css') !!}

    {!! HTML::style('static/admin/css/plugins/toastr/toastr.min.css') !!}

    @yield('dyn_css')


</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/login.png" style="width:100px; height:100px"/>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold">
                                            {{auth()->user()->full_name}}
                                        </strong>
                                     </span>
                                 </span>
                             </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="">Cuenta</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                    </a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        <div class="logo-element">
                           :)
                        </div>
                    </li>
                    <li class="{{isset($tab)&&$tab=='dashboard'?'active':''}}">
                        <a href="#">
                            <i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="{{isset($tab)&&$tab=='system'?'active':''}}">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Cotizacones</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='users'?'active':''}}">
                            <a href="{{route('cotizador')}}">Cotizador</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='roles'?'active':''}}">
                            <a href="#">Roles</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='permissions'?'active':''}}">
                            <a href="#">Permisos</a>
                            </li>

                        </ul>
                    </li>
                    {{-- <li class="{{isset($tab)&&$tab=='wedding'?'active':''}}">
                        <a href="#"><i class="fa fa-folder-open-o "></i> <span class="nav-label">Bodas</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='contracts'?'active':''}}">
                            <a href="{{route('admin.contracts.index')}}">Contratos</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='galleries'?'active':''}}">
                            <a href="{{route('admin.galleries.index')}}">Galeria</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="{{isset($tab)&&$tab=='walls'?'active':''}}">
                        <a href="#"><i class="fa fa-gift "></i><span class="nav-label">Mesa de Regalos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='walls'?'active':''}}">
                            </li>
                        </ul>
                    </li> --}}
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Sistema de administración {{config('app.name')}}.</span>
                </li>
                <li>
                    <a href="{{url('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Cerrar sesión
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>
                        @yield('page_title')
                    </h2>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        @yield('page_action')
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    @if(isset($errors)&&count($errors)>0)
                    <div role="alert" class="alert alert-danger alert-dismissible animated fadeInRightBig">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                      <span aria-hidden="true" class="s7-close-circle"></span></button>
                      Ocurrieron los siguientes errores
                      <div class="clearfix"></div>
                      <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                      </ul>
                    </div>
                    @endif
                    @if (session('alert'))
                   <!-- <div role="alert" class="alert alert-{{session('alert')['type']}} alert-dismissible animated fadeInRightBig">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                      <span aria-hidden="true" class="s7-close"></span></button>
                      <span class="icon s7-{{session('alert')['icon']}}"></span>
                      {{session('alert')['msg']}}
                    </div>-->
                    @endif

                    @yield('content')

                </div>
            </div>
        </div>
            <div class="footer">
                <div class="pull-right">

                </div>
                <div>
                    <strong>Copyright</strong> RICSA &copy; {{date('Y')}}
                </div>
            </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    {!! HTML::script('static/bower_components/jquery/dist/jquery.min.js') !!}
    {!! HTML::script('static/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

    <!-- Custom and plugin javascript -->
    {!! HTML::script('static/admin/js/inspinia.js') !!}
    {!! HTML::script('static/admin/js/plugins/pace/pace.min.js') !!}
    {!! HTML::script('static/admin/js/plugins/toastr/toastr.min.js') !!}
    {!! HTML::script('static/admin/js/plugins/metisMenu/jquery.metisMenu.js') !!}
    {!! HTML::script('static/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}
    {!! HTML::script('static/bower_components/bootstrap-validator/dist/validator.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            if($('meta[name="csrf-token"]')!=undefined){
              $.ajaxSetup({ headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              } });
            }

            @if (session('alert'))
            toastr.{{session('alert')['type']}}('{{session('alert')['msg']}}');
            @endif

        });
    </script>
    @stack('scripts')
    @yield('dyn_js')


</body>

</html>
