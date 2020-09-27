@extends('auth.layouts.master')

@section('title') @lang('auth.products')@endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.products')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('auth.code')
                </th>
                <th>
                    @lang('auth.name')
                </th>
                <th>
                    @lang('auth.category')
                </th>
                <th>
                    @lang('auth.edit')
                </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name_en }}</td>
                    <td>{{ $product->category->name_en }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('products.show', $product) }}">@lang('auth.open')</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('products.edit', $product) }}">@lang('auth.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('auth.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
        <a class="btn btn-success" type="button" href="{{ route('products.create') }}">@lang('auth.add_prod')</a>
    </div>
@endsection
