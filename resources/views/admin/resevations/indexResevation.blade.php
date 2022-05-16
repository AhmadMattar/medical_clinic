@extends('admin.layout.master')
@section('content')
<div id="payments">
    @if (session('success'))
        <div class="" id="pargMessage">
            <p id="pargMessage">{{session('success')}}</p>
        </div>
    @endif
    <h2 class="title">Resevrations</h2>
    <br>
    @include('admin.resevations.filter.filter')
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Resevration date</th>
            <th>Change Date</th>
        </tr>
        @foreach ($resevrations as $resevration)
            <tr>
                <td>{{$resevration->patient->name}}</td>
                <td>{{$resevration->date->format('Y-m-d H:i')}}</td>
                <td>
                    <a href="{{route('reservations.edit', $resevration->id)}}">
                        <i class="fa fa-edit fa fa-2x"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop
