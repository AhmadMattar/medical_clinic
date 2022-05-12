@extends('admin.layout.master')
@section('content')
<div id="patients">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <h3>Payemnt state</h3>
                    </tr>
                    <tr>
                        <th>Total payments</th>
                        <td>{{$patient->payments->sum('amount')}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Date of pay</th>
                        @forelse ($patient->payments as $payment)
                            <tr>
                                <td>{{$payment->patient->name}}</td>
                                <td>{{$payment->amount}}</td>
                                <td>{{$payment->created_at}}</td>
                            </tr>
                        @empty
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </table>
</div>
@stop
