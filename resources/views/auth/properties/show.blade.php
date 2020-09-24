@extends('auth.layouts.master')

@section('title', 'Свойство ' . $property->name)

@section('content')
    <div class="col-md-12">
        <h1>Property {{ $property->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Field
                </th>
                <th>
                    Value
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $property->id }}</td>
            </tr>
            <tr>
                <td>Name RU</td>
                <td>{{ $property->name }}</td>
            </tr>
            <tr>
                <td>Name EN</td>
                <td>{{ $property->name_en }}</td>
            </tr>
            <tr>
                <td>Name LV</td>
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
