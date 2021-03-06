@extends('admin.layout.master')
@section('content')
<div id="patients">

    <h2 class="title">Patients</h2><hr><br><br>
    @if (session('success'))
        <div class="" id="pargMessage">
            <p >{{session('success')}}</p>
        </div>
    @endif
    @include('admin.patients.filter.filter')
    <table>
        <tr>
            <th>Name</th>
            <th>ID Num</th>
            <th>Phone Num</th>
            <th>Treatment State</th>
            <th>Next Reservation</th>
            <th>Payments</th>
            <th>Action</th>
        </tr>
        @forelse ($patients as $patient)
        <tr>
            <td>{{$patient->name}}</td>
            <td>{{$patient->identity_number}}</td>
            <td>{{$patient->phone}}</td>
            <td>{{$patient->treatmentState()}}</td>
            <td>{{$patient->reservations->min('date') == '' ? 'No reservation found' : $patient->reservations->min('date')->format('Y-m-d H:i')}}</td>
            <td>
                <a href="{{route('patients.show', $patient->id)}}">
                    {{$patient->payments->sum('amount')}}
                </a>
            <td>
                <a href="{{route('patients.edit', $patient->id)}}" style="margin-right: 10px">
                    <i class="pointer fa fa-edit fa fa-2x"></i>
                </a>
                <a href="javascript:void(0);"
                    onclick="if(confirm('Are you sure to delete this record?')) { document.getElementById('delete-patient-{{$patient->id}}').submit(); } else {return false;}">
                    <i class="pointer fa fa-trash fa fa-2x"></i>
                </a>
                <form action="{{route('patients.destroy', $patient->id)}}" method="POST" id="delete-patient-{{$patient->id}}" style="display: none">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @empty
            <th>No patients found</th>
        @endforelse
    </table><hr>
</div>
@stop
