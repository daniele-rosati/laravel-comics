<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics{{ Route::currentRouteName() == 'welcome' ? ' - Welcome' : ''}}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    {{-- <header> --}}

        <div class="container-fluid">

            <div class="row justify-content-center">
    
                <div class="col-8 p-0">
    
                    <nav class="navbar navbar-expand-lg py-0">
    
                        <a class="navbar-brand flex-grow-1" href="#"><img src="images\jumbotron.jpg"></a>
    
                        <div class="navbar-nav d-flex justify-content-between text-uppercase">
    
                            <a class="nav-link px-4 py-5">
                                link.text</a>
    
                        </div>
    
                    </nav>
    
                </div>
    
            </div>

            <div class="row">
    
                <div class="col-12 d-flex justify-content-center p-0 dc-jumbotron">
    
                    <div class="col-8 position position-relative">
    
                        <div class=" position-absolute top-100 translate-middle-y py-2 px-4 dc-currentSeries">
                            <h5 class="text-uppercase m-0">Current Series</h5>
                        </div>
    
                    </div>
    
                </div>
            </div>
    
        </div>

    {{-- </header> --}}


    <main class="">

        @yield('content')

    </main>

        {{-- MENU --}}

        <div class="container-fluid dc-menuCont">

            <div class="row justify-content-center">
    
                <div class="col-8 p-0">
    
                    <div class="d-flex align-items-center justify-content-evenly flex-wrap p-4 dcMenuEl">
    
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias porro tenetur quis deleniti voluptas, eius sit nemo odio magnam, totam at ea assumenda quasi tempora eos, nihil iure itaque voluptatibus.</p>
    
                        {{-- <a :href="link.path" class="text-uppercase m-3" v-for="link in servicesLinks"><img
                                :src="" alt=""><span class="ms-4">{{ link.text }}</span></a> --}}
    
                    </div>
    
                </div>
    
            </div>
    
        </div>

    {{-- FOOTER --}}

   

</body>

</html>