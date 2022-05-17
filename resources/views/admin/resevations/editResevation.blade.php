@extends('admin.layout.master')
@section('style')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
@endsection
@section('content')
<div class="container2">
    <h2 class="form_h2"> Add New Reservation </h2>
    @include('admin.error.error')
    <form action="{{route('reservations.update', $reservation->id)}}" method="post" id="form2">
        @csrf
        @method('put')
        <label for="name">Name</label><br>
        <input disabled type="text" name="name" id="name" value="{{$reservation->patient->name}}"><br>
        <input type='datetime-local' id="date" name="date" data-format="yyyy-mm-dd H:i" class="form-control" value="{{$reservation->date}}"/>
        <button class="button">Add Reservation</button>
    </form>
</div>

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    {{-- <script src="{{asset('backend/js/test.js')}}"></script> --}}
    <script>
        // var today = new Date().toISOString().slice(0, 16);
        // document.getElementsByName("date")[0].min = today;
        // console.log(today);
    </script>
@endsection
