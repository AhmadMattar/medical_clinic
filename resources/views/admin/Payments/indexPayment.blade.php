@extends('admin.layout.master')
@section('content')
<div id="payments">
    <h2 class="title">Payments</h2><hr><br><br>
    @if (session('success'))
        <div class="" id="pargMessage">
            <p>{{session('success')}}</p>
        </div>
    @endif
    <table>
        <tr>
            <th>Name</th>
            <th>Payment amount</th>
            <th>Date</th>
        </tr>
        @foreach ($payments as $payment)
            <tr>
                <td>{{$payment->patient->name}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->created_at->format('Y-m-d H:i')}}</td>
            </tr>
        @endforeach
    </table>
</div>
@stop
