<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <title>{{config('app.name')}} | @yield('titulo')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <link rel="icon" href="{{asset('img/logo-nbg.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    @yield('css')

</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #FFF; color: #444;">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #163d4d;  color: #EEE;">
        
            <a class="navbar-brand" href="{{route('home')}}"><img class="rounded border-0 px-1" src="{{asset('img/logo-nbg.png')}}" alt="logo cne" height="50"></a>
            <span class="font-weight-bold">Cuestionario Diagnostico de Gestión Energética - ISO 50001</span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>-->
                </ul>
            </div>
        </nav>

        <!-- <div class="my-3 mx-3">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                @yield('breadcrumb-item')
            </ol>
        </div> -->

    </header>



    <main class="p-5">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button> 
        @yield('main')
    </main>

    <footer class="mt-auto">

        @yield('footer')

    </footer>

    @yield('modals')

    <!-- FontAwesome para íconos -->
    <script src="https://kit.fontawesome.com/a649e3052e.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>-->
    <script type="text/javascript" src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datatables/general.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datatables/datatables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
 
    

    @yield('scripts')

</body>
</html>