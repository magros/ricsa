<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('meta_extra')

    <title>@yield('meta_title') | Administración</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {!! HTML::style('static/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

    {!! HTML::style('static/bower_components/font-awesome/css/font-awesome.min.css') !!}

    {!! HTML::style('static/admin/css/animate.css') !!}
    {!! HTML::style('static/admin/css/style.css') !!}
    {!! HTML::style('static/admin/css/custom.css') !!}
    {!! HTML::style('static/cotizacion/css/cotizacion.css') !!}

    {!! HTML::style('static/admin/css/plugins/toastr/toastr.min.css') !!}

    @yield('dyn_css')


</head>

<body>

    <div id="wrapper" class="back-dash">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav " id="side-menu">
                    <li class="nav-header back-dash">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="" src="{{asset('/static/login/img/logo_ricsa.png')}}" style="margin-left:-9%;"/>
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
                           R
                        </div>
                    </li>
                    <li class="{{isset($tab)&&$tab=='dashboard'?'active':''}} w-100" >
                        <a href="#">
                            <i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    {{-- Cotizaciones --}}
                    <li class="{{isset($tab)&&$tab=='quotation'?'active':''}} w-100" >
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Cotizacones</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='clients'?'active':''}}">
                                <a href="{{route('cotizacion.client')}}">Clientes</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='materials'?'active':''}}">
                                <a href="{{route('cotizacion.material')}}">Materiales</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='quotations'?'active':''}}">
                                <a href="{{route('cotizacion.index')}}">Cotizaciones</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='por_rics'?'active':''}}">
                                <a href="#">Portafolio de RIC'S</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Ingeniería --}}
                    <li class="{{isset($tab)&&$tab=='engineering'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Ingeniería</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='proyects'?'active':''}}">
                                <a href="{{route('ingenieria.proyect')}}">Proyectos</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='materials'?'active':''}}">
                                <a href="{{route('ingenieria.material')}}">Materiales</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='hours'?'active':''}}">
                                <a href="{{route('ingenieria.material')}}">Asignación de horas</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='reports'?'active':''}}">
                                <a href="#">Reportes</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Almacen --}}
                    <li class="{{isset($tab)&&$tab=='warehouse'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Almacen</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='proyects'?'active':''}}">
                                <a href="{{route('almacen.proyect')}}">Proyectos</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='inventory'?'active':''}}">
                                <a href="{{route('almacen.inventory')}}">Inventario</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='exitmaterials'?'active':''}}">
                                <a href="{{route('almacen.exit')}}">Salida de materiales</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='reports'?'active':''}}">
                                <a href="#">Reportes</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Precios/Tena --}}
                    <li class="{{isset($tab)&&$tab=='price'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Actualización precios</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='dollars'?'active':''}}">
                                <a href="{{route('precio.dollar')}}">Dolar</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='metals'?'active':''}}">
                                <a href="{{route('precio.metal')}}">Metales</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='reports'?'active':''}}">
                                <a href="#">Reportes</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Calidad --}}
                    <li class="{{isset($tab)&&$tab=='calidad'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Calidad</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='calivalidacion'?'active':''}}">
                                <a href="{{route('calidad.validation')}}">Validacion</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='calipersonal'?'active':''}}">
                                <a href="{{route('calidad.personal')}}">Personal</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='calireporte'?'active':''}}">
                                <a href="{{route('calidad.report')}}">Reportes</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Compras --}}
                    <li class="{{isset($tab)&&$tab=='compras'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Compras</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='compra'?'active':''}}">
                                <a href="{{route('compras.shopping')}}">Compras</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='listmat'?'active':''}}">
                                <a href="{{route('compras.listmaterial')}}">Lista de materiales</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='listcon'?'active':''}}">
                                <a href="{{route('compras.listconsumable')}}">Lista de consumibles</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='ordcom'?'active':''}}">
                                <a href="{{route('compras.ordershopp')}}">Ordenes de compra</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Contabilidad --}}
                    <li class="{{isset($tab)&&$tab=='contabilidad'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Contabilidad</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='material'?'active':''}}">
                                <a href="{{route('contabilidad.material')}}">Materiales</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='provider'?'active':''}}">
                                <a href="{{route('contabilidad.provider')}}">Provedores</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='proyect'?'active':''}}">
                                <a href="{{route('contabilidad.proyect')}}">Proyectos</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='con_report'?'active':''}}">
                                <a href="{{route('contabilidad.report')}}">Reportes</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Produccion --}}
                    <li class="{{isset($tab)&&$tab=='produccion'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Produccion</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='produccionsub'?'active':''}}">
                                <a href="{{route('produccion.production')}}">Produccion</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='prodproyectos'?'active':''}}">
                                <a href="{{route('produccion.proyect')}}">Proyectos</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='prodpersonal'?'active':''}}">
                                <a href="{{route('produccion.personal')}}">Personal</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Comercializacion --}}
                    <li class="{{isset($tab)&&$tab=='comercializacion'?'active':''}} w-100">
                        <a href="#"><i class="fa fa-cogs "></i> <span class="nav-label">Comercializacion</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{isset($subtab)&&$subtab=='comerprecio'?'active':''}}">
                                <a href="{{route('comercializacion.price')}}">Precios</a>
                            </li>
                            <li class="{{isset($subtab)&&$subtab=='comerreporte'?'active':''}}">
                                <a href="{{route('comercializacion.report')}}">Reportes</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="navbar-nav mr-auto">
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
            <div class="row wrapper border-bottom bg-black page-heading">
                <div class="col-sm-4">
                    <h2 class="white-text">
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
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#data-spanish').DataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            } );
         } );
    </script> --}}
    @stack('scripts')
    @yield('dyn_js')


</body>

</html>
