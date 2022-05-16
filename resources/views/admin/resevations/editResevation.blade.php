@extends('admin.layout.master')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
@endsection
@section('content')
<h2> Update Reservation </h2><br><br>
@include('admin.error.error')
<form action="{{route('reservations.update', $reservation->id)}}" method="post">
    @csrf
    @method('put')
    <label class="bold" for="Name">Name:</label>
    <input disabled type="text" name="name" id="name" value="{{$reservation->patient->name}}"><br><br>

    <div class="form-group">
        <div class='input-group date' id='CalendarDateTime'>
        <input type='dateTime' name="date" data-format="yyyy-mm-dd H:i" class="form-control" value="{{old('date', $reservation->date)}}"/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
    </div>
    <button class="button">Update Reservation</button>
</form>
@stop
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{asset('backend/js/test.js')}}"></script>
@endsection
