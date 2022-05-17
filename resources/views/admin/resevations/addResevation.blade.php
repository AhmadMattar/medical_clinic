@extends('admin.layout.master')
@section('style')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
@endsection
@section('content')
<div class="container2">
    <h2 class="form_h2"> Add New Reservation </h2>
    @include('admin.error.error')
    <form action="{{route('reservations.store')}}" method="post" id="form2">
        @csrf
        <select name="patient_id" class="form-control" style="width: 350px">
            <option value="" disabled selected>Select Name</option>
            @foreach($patients as $patient)
                <option value="{{$patient->id}}" {{ old('patient_id') == $patient->id ? 'selected' : null }}>{{$patient->name}}</option>
            @endforeach
        </select>
        <input type='datetime-local' id="date" name="date" data-format="yyyy-mm-dd H:i" class="form-control" value="{{old('date')}}"/>
        <button class="button">Add Reservation</button>
    </form>
</div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        
        // var min = today
        // var yestarday = min[8] +""+ min[9];
        
        // var date = new Date();
        // var td = date.getDate()
        // var current_day = yestarday + 1;
        // var x = today.search(yestarday);
        // console.log(today.index(8));
        // var date = new Date();
        // var td = date.getDate();
        // var today = new Date().toISOString().slice(1, 16);
        // document.getElementsByName("date")[0].style.min = today;
        // console.log(td);

        // var date = new Date();
        // var today = date.getDate();
        // var month = date.getMonth();
        // var year = date.getFullYear();
        // var hour = date.getHours();
        // var minute = date.getMinutes();
        // if(month < 10){
        //     month = '0' + month;
        // }
        // if(today < 10){
        //     today = '0' + today;
        // }
        // if(hour < 10){
        //     hour = '0' + hour;
        // }
        // if(minute < 10){
        //     minute = '0' + minute;
        // }

        // var minDate = year + "-" + month + "-" + today ;// + " " + hour + ":" + minute;

        // document.getElementById("date").setAttribute("min", minDate);
        // console.log(minDate);
    </script>
@endsection
