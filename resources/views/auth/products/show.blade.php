@extends('auth.layouts.master')

@section('title', 'Product ' . $product->name_en)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name_en }}</h1>
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
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>@lang('auth.code)</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) RU</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) EN</td>
                <td>{{ $product->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name) LV</td>
                <td>{{ $product->name_lv }}</td>
            </tr>
            <tr>
                <td>Image</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{ $product->category->@lang('auth.name) }}</td>
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
