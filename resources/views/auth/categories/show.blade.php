@extends('auth.layouts.master')

@section('title')
@lang('auth.category') {{$category->name_en}}
@endsection
@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.category') {{ $category->name_en }}</h1>
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
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>@lang('auth.code')</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name') RU</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name') EN</td>
                <td>{{ $category->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name') LV</td>
                <td>{{ $category->name_lv }}</td>
            </tr>
            <tr>
                <td>@lang('auth.image')</td>
                <td><img src="{{ Storage::url($category->image) }}"
                         height="240px"></td>
            </tr>
            <tr>
                <td>@lang('auth.quantity')</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
