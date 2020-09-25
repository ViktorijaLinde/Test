@extends('auth.layouts.master')

@section('title')@lang('auth.coupons')@endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.coupons')</h1>
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
                    @lang('auth.descript')
                </th>
                <th>
                    @lang('auth.actions')
                </th>
            </tr>
            @foreach($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->id}}</td>
                    <td>{{ $coupon->code }}</td>
                    <td>{{ $coupon->description }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('coupons.destroy', $coupon) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('coupons.show', $coupon) }}">@lang('auth.open')</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('coupons.@lang('auth.edit)', $coupon) }}">@lang('auth.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('auth.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $coupons->links() }}
        <a class="btn btn-success" type="button" href="{{ route('coupons.create') }}">@lang('auth.add_coup')</a>
    </div>
@endsection
