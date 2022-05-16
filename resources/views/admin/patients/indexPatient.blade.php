@extends('admin.layout.master')
@section('content')
<div id="patients">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h2 class="title">Patients</h2><hr><br><br>
    @include('admin.patients.filter.filter')
    <table>
        <tr>
            <th>Name</th>
            <th>Identify Num</th>
            <th>Phone Num</th>
            <th>Treatment State</th>
            <th>Next Reservation</th>
            <th>Total payments</th>
            <th>Change</th>
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
                <a href="{{route('patients.edit', $patient->id)}}">
                    <i class="pointer fa fa-edit fa fa-2x"></i>
                </a>
            </td>
        </tr>
        @empty
            <th>No patients found</th>
        @endforelse
    </table><hr>
</div>
@stop
