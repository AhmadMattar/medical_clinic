@extends('admin.layout.master')
@section('content')
<div class="container2 my-5">
    <div id="payments">
        <h2 class="form_h2"> Add New Payment </h2>
        @include('admin.error.error')
        <form action="{{route('payments.store')}}" method="post" id="form2">
            @csrf
            <select name="patient_id" class="form-control mb-3" style="width: 350px">
                <option value="" disabled selected>Select Name</option>
                @foreach($patients as $patient)
                    <option value="{{$patient->id}}" {{ old('patient_id') == $patient->id ? 'selected' : null }}>{{$patient->name}}</option>
                @endforeach
            </select><br>
            <label class="bold" for="Amount">Amount:</label>
            <input type="number" id="Amount" name="amount" value="{{old('amount')}}">
            <button class="button">Add Payment</button>
        </form>
    </div>
</div>
@stop
