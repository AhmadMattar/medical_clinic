<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>project</title>
        <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        @yield('style')
    </head>
    <body>
        <div class="container">
            <header>
               <h1>Medical Clinic Management System</h1>
            </header>
            <div class="content">
                <aside>
                    <ul class="links">
                        <li><a class="hoverEffect" href="{{route('patients.index')}}">Patients</a></li>
                        <li><a class="hoverEffect" href="{{route('patients.create')}}">Add Patient</a></li>
                        <li><a class="hoverEffect" href="{{route('payments.index')}}">Payments</a></li>
                        <li><a class="hoverEffect" href="{{route('payments.create')}}">Add Payments</a></li>
                        <li><a class="hoverEffect" href="{{route('reservations.index')}}">Reservations</a></li>
                        <li><a class="hoverEffect" href="{{route('reservations.create')}}">Add Reservations</a></li>
                    </ul>
                </aside>
                <main>
                @yield('content')
                </main>
            </div>
        </div>
        <script src="{{asset('backend/js/script.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        @yield('script')
    </body>
</html>
