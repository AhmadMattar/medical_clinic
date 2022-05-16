@extends('admin.layout.master')
@section('content')
@include('admin.error.error')
    <div id="patients">
        <form action="{{route('patients.update', $patient->id)}}" method="post" >
            @csrf
            @method('put')
            <label for="name">Name:</label>
            <input class="form-control mb-3" type="text" id="name" name="name" value="{{old('name'), $patient->name}}">
            <label for="phone">Phone:</label>
            <input class="form-control mb-3" type="tel" id="phone" name="phone" value="{{old('phone'), $patient->phone}}">
            <label for="identity_number">Identity number:</label>
            <input class="form-control mb-3" type="text" id="identity_number" name="identity_number" value="{{old('identity_number'), $patient->identity_number}}">
            <label for="treatment_state">Treatment state:</label>
            <select name="treatment_state" class="form-control mb-3">
                <option value="0" {{$patient->treatment_state == '0' ? 'selected' : ''}}>Not complete</option>
                <option value="1" {{$patient->treatment_state == '1' ? 'selected' : ''}}>complete</option>
            </select>
            <button type="submit" class="button btn-primary">Update Patient</button>
        </form>
    </div>
@endsection
