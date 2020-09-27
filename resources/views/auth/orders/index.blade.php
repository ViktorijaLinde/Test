@extends('auth.layouts.master')

@section('title') 
@lang('auth.orders')
@endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.orders')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                  @lang('auth.name')
                </th>
                <th>
                    @lang('auth.number')
                </th>
                <th>
                    @lang('auth.created')
                </th>
                <th>
                    @lang('auth.total')
                </th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->sum }} €</td>
                     <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button"
                               @admin
                               href="{{ route('orders.show', $order) }}"
                               
                                @endadmin
                            >@lang('auth.open')</a>
                        </div>
                    </td>
                   
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $orders->links() }}
    </div>
@endsection
