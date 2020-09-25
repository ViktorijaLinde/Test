@extends('auth.layouts.master')

@section('title') @lang('auth.skus') @endsection

@section('content')
    <div class="col-md-12">
        <h1> @lang('auth.sku')</h1>
        <h2>{{ $product->name_en }}</h2>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('auth.skus_prop')
                </th>
                <th>
                    @lang('auth.action')
                </th>
            </tr>
            @foreach($skus as $sku)
                <tr>
                    <td>{{ $sku->id }}</td>
                    <td>{{ $sku->propertyOptions->map->name_en->implode(', ') }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('skus.destroy', [$product, $sku]) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('skus.show', [$product, $sku]) }}">@lang('auth.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('skus.edit', [$product, $sku]) }}">@lang('auth.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('auth.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $skus->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('skus.create', $product) }}">@lang('auth.add_skus')</a>
    </div>
@endsection
