@extends('auth.layouts.master')

@section('title', 'Merchant ' . $merchant->name)

@section('content')
    <div class="col-md-12">
        <h1>Merchant {{ $merchant->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    @lang('auth.field)
                </th>
                <th>
                    @lang('auth.value)
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $merchant->id }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name)</td>
                <td>{{ $merchant->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $merchant->email }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
