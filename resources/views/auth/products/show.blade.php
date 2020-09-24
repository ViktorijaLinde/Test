@extends('auth.layouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
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
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Code</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Name RU</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Name EN</td>
                <td>{{ $product->name_en }}</td>
            </tr>
            <tr>
                <td>Name LV</td>
                <td>{{ $product->name_lv }}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Labels</td>
                <td>
                    @if($product->isNew())
                        <span class="badge badge-success">New</span>
                    @endif

                    @if($product->isRecommend())
                        <span class="badge badge-warning">Recommend</span>
                    @endif

                    @if($product->isHit())
                        <span class="badge badge-danger">Hit</span>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
