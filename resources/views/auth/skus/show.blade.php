@extends('auth.layouts.master')

@section('title') @lang('auth.sku') {{$skus->name_en}} @endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.sku') {{ $skus->product->name }}</h1>
        <h2>{{ $skus->propertyOptions->map->name->implode(', ') }}</h2>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    @lang('auth.field')
                </th>
                <th>
                    @lang('auth.value')
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $skus->id }}</td>
            </tr>
            <tr>
                <td>@lang('auth.price')</td>
                <td>{{ $skus->price }}</td>
            </tr>
            <tr>
                <td>@lang('auth.quantity')</td>
                <td>{{ $skus->count }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
