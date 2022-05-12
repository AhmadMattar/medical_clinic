@extends('admin.layout.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('backend/vendor/datepicker/themes/classic.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/datepicker/themes/classic.date.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/datepicker/themes/classic.time.css') }}">
    <style>
        .picker__select--month, .picker__select--year {
            padding: 0 !important;
            width: auto;
        }
    </style>
@stop
@section('content')
    <div class="container my-5">
        <div id="payments">
            <h2> Add New Reservation </h2><br><br>
            @include('admin.error.error')
            <form action="{{route('reservations.store')}}" method="post">
                @csrf
                <select name="patient_id" class="form-control mb-3">
                    <option value="" disabled selected>Select Name</option>
                    @foreach($patients as $patient)
                        <option value="{{$patient->id}}" {{ old('patient_id') == $patient->id ? 'selected' : null }}>{{$patient->name}}</option>
                    @endforeach
                </select>
                <label class="bold" for="Date">Date:</label>
                <input type="text" id="date" name="date" value="{{old('date')}}">
                <button class="button">Add Reservation</button>
            </form>
        </div>
    </div>
@stop
@section('script')
    <script src="{{ asset('backend/vendor/datepicker/picker.js') }}"></script>
    <script src="{{ asset('backend/vendor/datepicker/picker.date.js') }}"></script>
    <script src="{{ asset('backend/vendor/datepicker/picker.time.js') }}"></script>
    <script>
        $(function(){
            $('#date').pickadate({
                format: 'yyyy-mm-dd h:i',
                selectMonths: true, //creates a dropdown to control month
                selectYears: true, //creates a dropdown to control year
                clear: 'clear',
                closeOnSelect: true //close upon selecting a date
            });

            $('#date').change(function(){
                // get start date and put in the variable (selected_ci_date)
                selected_ci_date = "";
                selected_ci_date = $('#date').val();
                if(selected_ci_date != null){
                    //cidate this variable to specify the start date that was is select it
                    var cidate = new Date(selected_ci_date);
                    min_codate = "";
                    min_codate = new Date();
                    min_codate = setDate(cidate.getDate()+1);
                    enddate.set('min', min_codate);
                }
            });
        });
    </script>
@stop
