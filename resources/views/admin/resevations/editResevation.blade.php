@extends('admin.layout.master')
@section('content')
<div class="container my-5">
    <div id="payments">
        <h2> Update Reservation </h2><br><br>
        @include('admin.error.error')
        <form action="{{route('reservations.update', $reservation_selected->id)}}" method="post">
            @csrf
            @method('put')
            <label class="bold" for="Name">Name:</label>
            <input disabled type="text" name="name" id="name" value="{{$reservation_selected->patient->name}}"><br><br>

            <label class="bold" for="Date">Date:</label>
            <input type="text" id="Date" name="date">
            <button class="button">Update Reservation</button>
        </form>
    </div>
</div>
@stop
