@extends('auth.layouts.master')

@isset($coupon)
    @section('title')
@lang('auth.edit_coup'){{$coupon->name}} @endsection
@else
    @section('title') @lang('auth.create_coup')@endsection
@endisset

@section('content')
    <div class="col-md-12">
        @isset($coupon)
            <h1>@lang('auth.edit_coup')</h1>
        @else
            <h1>@lang('auth.add_coup')</h1>
        @endisset
        <form method="POST"
              @isset($coupon)
              action="{{ route('coupons.update', $coupon) }}"
              @else
              action="{{ route('coupons.store') }}"
            @endisset
        >
            <div>
                @isset($coupon)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">@lang('auth.code'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'code'])
                        <input type="text" class="form-control" name="code" id="code"
                               value="@isset($coupon){{ $coupon->code }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="value" class="col-sm-2 col-form-label">@lang('auth.value'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'value'])
                        <input type="text" class="form-control" name="value" id="value"
                               value="@isset($coupon){{ $coupon->value }}@endisset">
                    </div>
                </div>
                <br>
                @foreach ([
                'only_once' => 'Купон может быть использован только один раз',
                ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">@lang('auth.is_used_once') </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{$field}}" id="{{$field}}"
                                   @if(isset($coupon) && $coupon->$field === 1)
                                   checked="'checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach
                <br>
                <div class="input-group row">
                    <label for="expired_at" class="col-sm-2 col-form-label">@lang('auth.expired_at'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'expired_at'])
                        <input type="date" class="form-control" name="expired_at" id="expired_at"
                               value="@if(isset($coupon) && !is_null($coupon->expired_at))
                               {{ $coupon->expired_at->format('Y-m-d') }}@endif">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">@lang('auth.descript'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description'])
                        <textarea name="description" id="description" cols="72"
                                  rows="7">@isset($coupon){{ $coupon->description }}@endisset</textarea>
                    </div>
                </div>
                <br>
                <button class="btn btn-success">@lang('auth.save')</button>
            </div>
        </form>
    </div>
@endsection
