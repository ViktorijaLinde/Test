@extends('auth.layouts.master')

@section('title') @lang('auth.coupon') {{$coupon->code}} @endsection

@section('content')
    <div class="col-md-12">
        <h1>{{ $coupon->code }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    @lang('auth.field')
                </th>
                <th>
                    @lang('auth.value)
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $coupon->id}}</td>
            </tr>
            <tr>
                <td>@lang('auth.code)</td>
                <td>{{ $coupon->code }}</td>
            </tr>
            <tr>
                <td>@lang('auth.descript)</td>
                <td>{{ $coupon->description }}</td>
            </tr>
            @isset($coupon->currency)
                <tr>
                    <td>@lang('auth.currency)</td>
                    <td>{{ $coupon->currency->code }}</td>
                </tr>
            @endisset
            <tr>
                <td>@lang('auth.is_absolute')</td>
                <td>@if($coupon->isAbsolute()) Да @else Нет @endif</td>
            </tr>
            <tr>
                <td>
                    @lang('auth.discount')
                </td>
                <td>
                    {{ $coupon->value }} @if($coupon->isAbsolute()) {{ $coupon->currency->code }} @else % @endif
                </td>
            </tr>
            <tr>
                <td>@lang('auth.is_used_once')</td>
                <td>@if($coupon->isOnlyOnce()) Да @else Нет @endif</td>
            </tr>
            <tr>
                <td>@lang('auth.used'):</td>
                <td>{{ $coupon->orders->count() }}</td>
            </tr>
            @if($coupon->expired_at)
                <tr>
                    <td>@lang('auth.expired_at'):</td>
                    <td>{{ $coupon->expired_at->format('d.m.Y') }}</td>
                </tr>
            @endisset
            </tbody>
        </table>
    </div>
@endsection
