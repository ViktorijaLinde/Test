@extends('auth.layouts.master')

@isset($merchant)
    @section('title') @lang('auth.edit_merch') {{$merchant->name)}} @endsection
@else
    @section('title') @lang('auth.create_merch') @endsection
@endisset

@section('content')
    <div class="col-md-12">
        @isset($merchant)
            <h1>@lang('auth.edit_merch') <b>{{ $merchant->name }}</b></h1>
                @else
                    <h1>@lang('auth.add_merch')</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($merchant)
                      action="{{ route('merchants.update', $merchant) }}"
                      @else
                      action="{{ route('merchants.store') }}"
                    @endisset
                >
                    <div>
                        @isset($merchant)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('auth.name): </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($merchant){{ $merchant->name }}@endisset">
                            </div>
                        </div>

                            <br>
                            <div class="input-group row">
                                <label for="email" class="col-sm-2 col-form-label">@lang('auth.email'): </label>
                                <div class="col-sm-6">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="email" id="email"
                                           value="@isset($merchant){{ $merchant->email }}@endisset">
                                </div>
                            </div>

                        <button class="btn btn-success">@lang('main.save')</button>
                    </div>
                </form>
    </div>
@endsection

