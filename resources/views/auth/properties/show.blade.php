@extends('auth.layouts.master')

@section('title', 'Property ' . $property->name_en)

@section('content')
    <div class="col-md-12">
        <h1>Property {{ $property->name_en }}</h1>
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
                <td>{{ $property->id }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) RU</td>
                <td>{{ $property->name }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) EN</td>
                <td>{{ $property->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) LV</td>
                <td>{{ $property->name_lv }}</td>
            </tr>
{{--            <tr>--}}
{{--                <td>Quantity</td>--}}
{{--                <td>{{ $property->products->count() }}</td>--}}
{{--            </tr>--}}
            </tbody>
        </table>
    </div>
@endsection
