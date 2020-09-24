@extends('auth.layouts.master')

@section('title', 'Category ' . $category->name)

@section('content')
    <div class="col-md-12">
        <h1>Category {{ $category->name }}</h1>
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
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>Code</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>Name RU</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Name EN</td>
                <td>{{ $category->name_en }}</td>
            </tr>
            <tr>
                <td>Name LV</td>
                <td>{{ $category->name_lv }}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td><img src="{{ Storage::url($category->image) }}"
                         height="240px"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
