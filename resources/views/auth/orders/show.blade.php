@extends('auth.layouts.master')

@section('title')@lang('auth.order')  @endsection

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>@lang('auth.order') №{{ $order->id }}</h1>
                    <p>@lang('auth.cust_name') <b>{{ $order->name }}</b></p>
                    <p>@lang('auth.number') <b>{{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>@lang('auth.name')</th>
                            <th>@lang('auth.quantity')</th>
                            <th>@lang('auth.price')</th>
                            <th>@lang('auth.total')</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                        @foreach ($skus ?? '' as $sku)
                            <tr>
                                <td>
                                    <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                                        <img height="56px"
                                             src="{{ Storage::url($sku->product->image) }}">
                                        {{ $sku->product->name }}
                                    </a>
                                </td>
                                <td><span class="badge"> {{ $sku->pivot->count }}</span></td>
                                <td>{{ $sku->pivot->price }} </td>
                                <td>{{ $sku->pivot->price * $sku->pivot->count }} </td>
                            </tr>
                        @endforeach
                        }
                        <tr>
                            <td colspan="3">@lang('auth.sum')</td>
                            <td>{{ $order->sum }}€</td>
                        </tr>
                        @if($order->hasCoupon())
                            <tr>
                                <td colspan="3">@lang('auth.added_coup')</td>
                                <td><a href="{{ route('coupons.show', $order->coupon) }}">{{ $order->coupon->code }}</a></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
