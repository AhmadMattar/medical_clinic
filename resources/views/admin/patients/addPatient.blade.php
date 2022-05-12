@extends('admin.layout.master')
@section('content')
<div class="container my-5">
    <div id="patients">
        <h2> Add New Patient </h2>
        @include('admin.error.error')
        <form action="{{route('patients.store')}}" method="post">
            @csrf
            <input type="text" id="name" name="name" placeholder="Name" value="{{old('name')}}"><br><br>
            <input type="tel" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}"><br><br>
            <input type="text" id="identity_number" name="identity_number" placeholder="Identity number" value="{{old('identity_number')}}"><br><br>
            <select name="treatment_state" class="form-control mb-3">
                <option value="0" selected>Not complete</option>
                <option value="1"  {{old('treatment_state') == '1' ? 'selected' : ''}}>complete</option>
            </select>
            <button class="button">add</button>
        </form>
    </div>
</div>
@stop
