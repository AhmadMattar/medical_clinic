@extends('admin.layout.master')
@section('content')
@include('admin.error.error')
    <div id="patients">
        <form action="{{route('patients.update', $patient->id)}}" method="post" id="form" >
            @csrf
            @method('put')
            <label for="name">Name:</label>
            <input class="form-control mb-3" type="text" id="name" name="name" value="{{$patient->name}}">
            <label for="phone">Phone:</label>
            <input class="form-control mb-3" type="tel" id="phone" name="phone" value="{{$patient->phone}}"><br>
            <label for="identity_number">Identity number:</label>
            <input class="form-control mb-3" type="text" id="identity_number" name="identity_number" value="{{$patient->identity_number}}">
            <label for="treatment_state">Treatment state:</label>
            <select name="treatment_state" class="form-control mb-3">
                <option value="0" {{$patient->treatment_state == '0' ? 'selected' : ''}}>Not complete</option>
                <option value="1" {{$patient->treatment_state == '1' ? 'selected' : ''}}>complete</option>
            </select><br>
            <button type="submit" class="button btn-primary">Update Patient</button>
        </form>
    </div>
@endsection
