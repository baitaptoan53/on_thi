<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1">

               <title>@yield('title')</title>

               <!-- Styles -->
               <link href="{{ asset('css/app.css') }}" rel="stylesheet">
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
                              rel="stylesheet"
                              integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                              crossorigin="anonymous">
               
</head>

<body>
               <div class="container">
                              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                             <a class="navbar-brand" href="#">My App</a>
                                             <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                            data-target="#navbarNav" aria-controls="navbarNav"
                                                            aria-expanded="false" aria-label="Toggle navigation">
                                                            <span class="navbar-toggler-icon"></span>
                                             </button>
                                             <div class="collapse navbar-collapse" id="navbarNav">
                                                            <ul class="navbar-nav">
                                                                           <li class="nav-item">
                                                                                          <a class="nav-link"
                                                                                                         href="{{ route('home') }}">Home</a>
                                                                           </li>
                                                                           <li class="nav-item">
                                                                                          <a class="nav-link"
                                                                                                         href="{{ route('users.create') }}">Create
                                                                                                         User</a>
                                                                           </li>
                                                            </ul>
                                             </div>
                              </nav>

                              @yield('content')
               </div>

               <!-- Scripts -->
               <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                              integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                              crossorigin="anonymous"></script>