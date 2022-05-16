<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">

        <title>project</title>
        <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> --}}
        @yield('style')
    </head>
    <body>
        <div class="container">
            <header>
               <h2>Medical Clinic Management System</h2>
            </header>
            <div class="content">
                <aside>
                    <ul class="links">
                        <h3 style="position: relative" class="hoverEffect superpart pointer">
                            Patients<i style="position: absolute; right:10px;" class="fa fa-arrow-right"></i>
                            <li class="sidebarlink">
                                <a class=" hoverEffect1" href="{{route('patients.index')}}">
                                    Patients
                                </a>
                                <a class="hoverEffect1" href="{{route('patients.create')}}">Add Patient</a>
                            </li>
                        </h3>

                        <h3 style="position: relative" class="hoverEffect superpart pointer">
                            Payments<i style="position: absolute; right:10px;" class="fa fa-arrow-right"></i>
                            <li class="sidebarlink">
                                <a class=" hoverEffect1" href="{{route('payments.index')}}">
                                    Payments
                                </a>
                                <a class="hoverEffect1" href="{{route('payments.create')}}">Add Payments</a>
                            </li>
                        </h3>

                        <h3 style="position: relative" class="hoverEffect superpart pointer">
                            Reservations<i style="position: absolute; right:10px;" class="fa fa-arrow-right"></i>
                            <li class="sidebarlink">
                                <a class=" hoverEffect1" href="{{route('reservations.index')}}">
                                    Reservations
                                </a>
                                <a class="hoverEffect1" href="{{route('reservations.create')}}">Add Reservation</a>
                            </li>
                        </h3>
                    </ul>
                </aside>
                <main>
                    @yield('content')
                </main>
            </div>
            <script src="{{asset('backend/js/script.js')}}"></script>
            {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> --}}
            @yield('script')
        </div>
    </body>
</html>
