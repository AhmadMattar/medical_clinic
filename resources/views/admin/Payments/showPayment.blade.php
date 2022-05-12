@extends('admin.layout.master')
@section('content')
<div id="payments">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h2 class="title">Payments</h2>
    <br>
    <br><br>
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
