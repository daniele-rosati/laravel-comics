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

    HEADER

     <header> 

        <div class="container-fluid">

            <div class="row justify-content-center">
    
                <div class="col-8 p-0">
    
                    <nav class="navbar navbar-expand-lg py-0">
    
                    <a class="navbar-brand flex-grow-1" href="#"><img src="{{Vite::asset('resources/images/dc-logo.png')}}"></a>
    
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
                        <div style="background-image: url('resources/images/jumbotron.jpg');"></div> 
    
                        <div class=" position-absolute top-100 translate-middle-y py-2 px-4 dc-currentSeries">
                            <h5 class="text-uppercase m-0">Current Series</h5>
                        </div>
    
                    </div>
    
                </div>
            </div>
    
        </div>

    </header> 


    <main class="">

        @yield('content')

    </main>

        MENU 

        <div class="container-fluid dc-menuCont">

            <div class="row justify-content-center">
    
                <div class="col-8 p-0">
    
                    <div class="d-flex align-items-center justify-content-evenly flex-wrap p-4 dcMenuEl">
                    
                        <li> <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="" style="object-fit:contain ;"> DIGITAL COMISC </li>
                        <li> <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt=""> DC MERCHARNDISE </li>
                        <li> <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt=""> SUBSCRIPTION </li>
                        <li> <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt=""> COMISC SHOP LOCATOR </li>
                        <li> <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">DC POWER VISA </li>
                            
                    </div>
    
                </div>
    
            </div>
    
        </div>

    FOOTER

    <div class="container-fluid">

<div class="row flex-column justify-content-flex-end dc-footerCont">

    <footer class="p-0 ">

        <div class="d-flex justify-content-center dc-footerLinks">

            <div class="col-8 pt-5 d-flex flex-column flex-wrap align-content-start dc-bigLogo">

                <div class="col-2 dc-listContainer">

                    <ol class="list-unstyled">
                        
                        <li class="text-capitalize"><a href="">TEST</a>
                    </ol>

                </div>

            </div>

        </div>

        <div class="d-flex justify-content-center dc-contacts">

            <div class="col-8 d-flex align-items-center justify-content-between">

                <button class="btn text-uppercase dc-signUpBtn">sign-up now!</button>

                <div class="d-flex align-items-center dc-followCont">

                    <h4 class="text-uppercase m-0">follow us</h4>

                

                </div>

            </div>

        </div>

    </footer>

</div>

</div>

</body>

</html>