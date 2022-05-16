
@extends('admin.layout.master')
@section('content')
<div class="container2 my-5">
    <div id="patients">
        <h2 class="form_h2"> Add New Patient </h2>
        @include('admin.error.error')
        <form action="{{route('patients.store')}}" method="post" id="form2">
            @csrf
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" placeholder="Name" value="{{old('name')}}"><br>
            <label for="phone">Phone</label><br>
            <input type="tel" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}"><br>
            <label for="identity_number">Identity number</label><br>
            <input type="text" id="identity_number" name="identity_number" placeholder="Identity number" value="{{old('identity_number')}}"><br>
            <label for="treatment_state">Treatment state</label><br>
            <select name="treatment_state" class="form-control mb-3">
                <option value="0" selected>Not complete</option>
                <option value="1"  {{old('treatment_state') == '1' ? 'selected' : ''}}>complete</option>
            </select>
            <button class="button">Add Patient</button>
        </form>
    </div>
</div>
@stop



 {{-- @extends('admin.layout.master')
@section('content')
<div class="container my-5">
    <div id="patients">
        <h2> Add New Patient </h2>
        @include('admin.error.error')
        <form action="{{route('patients.store')}}" method="post" id="form">
            @csrf
            <label for="name" style="margin-right: 75px ">Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" value="{{old('name')}}">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}"><br>
            <label for="identity_number">Identity number:</label>
            <input type="text" id="identity_number" name="identity_number" placeholder="Identity number" value="{{old('identity_number')}}">
            <label for="treatment_state"  style="margin-right: 20px ">Treatment state:</label>
            <select name="treatment_state" class="form-control mb-3">
                <option value="0" selected>Not complete</option>
                <option value="1"  {{old('treatment_state') == '1' ? 'selected' : ''}}>complete</option>
            </select><br>
            <button class="button">Add Patient</button>
        </form>
    </div>
</div>
@stop --}}
