@extends('auth.layouts.master')

@section('title', 'Property option ' . $propertyOption->name_en)

@section('content')
    <div class="col-md-12">
        <h1>Property option {{ $propertyOption->name_en }}</h1>
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
                <td>{{ $propertyOption->id }}</td>
            </tr>
            <tr>
                <td>Option</td>
                <td>{{ $propertyOption->property->name }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) RU</td>
                <td>{{ $propertyOption->name }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) EN</td>
                <td>{{ $propertyOption->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) LV</td>
                <td>{{ $propertyOption->name_lv }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
