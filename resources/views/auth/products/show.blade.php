@extends('auth.layouts.master')

@section('title') @lang('auth.product') {{ $product->name_en}} @endsection

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name_en }}</h1>
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
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>@lang('auth.code')</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name') RU</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name') EN</td>
                <td>{{ $product->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('auth.name') LV</td>
                <td>{{ $product->name_lv }}</td>
            </tr>
            <tr>
                <td>@lang('auth.image')</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>@lang('auth.category')</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>@lang('auth.labels')</td>
                <td>
                    @if($product->isNew())
                        <span class="badge badge-success">@lang('auth.new')</span>
                    @endif

                    @if($product->isRecommend())
                        <span class="badge badge-warning">@lang('auth.recommend')</span>
                    @endif

                    @if($product->isHit())
                        <span class="badge badge-danger">@lang('auth.hit')</span>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
