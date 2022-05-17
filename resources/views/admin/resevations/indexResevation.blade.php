@extends('admin.layout.master')
@section('content')
<div id="payments">

    <h2 class="title">Resevrations</h2><hr><br><br>
    @if (session('success'))
        <div class="" id="pargMessage">
            <p>{{session('success')}}</p>
        </div>
    @endif
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
                    <a href="{{route('reservations.edit', $resevration->id)}}" style="margin-right: 20px">
                        <i class="fa fa-edit fa fa-2x"></i>
                    </a>
                    <a href="javascript:void(0);"
                        onclick="if(confirm('Are you sure to delete this record?')) { document.getElementById('delete-resevration-{{$resevration->id}}').submit(); } else {return false;}">
                        <i class="pointer fa fa-trash fa fa-2x"></i>
                    </a>
                    <form action="{{route('reservations.destroy', $resevration->id)}}" method="POST" id="delete-resevration-{{$resevration->id}}" style="display: none">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop
