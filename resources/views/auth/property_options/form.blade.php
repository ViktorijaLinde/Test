@extends('auth.layouts.master')

@isset($propertyOption)
    @section('title') @lang('auth.edit_prop_opt') {{$propertyOption->name_en}} @endsection
@else
    @section('title') @lang('auth.create_prop_opt') @endsection
@endisset

@section('content')
    <div class="col-md-12">
        @isset($propertyOption)
            <h1>@lang('auth.edit_prop_opt') <b>{{ $propertyOption->name_en }}</b></h1>
                @else
                    <h1>@lang('auth.add_prop_opt')</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($propertyOption)
                      action="{{ route('property-options.update', [$property, $propertyOption]) }}"
                      @else
                      action="{{ route('property-options.store', $property) }}"
                    @endisset
                >
                    <div>
                        @isset($propertyOption)
                            @method('PUT')
                        @endisset
                        @csrf
                            <div>
                                <h2>@lang('auth.property') {{ $property->name }}</h2>
                            </div>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') RU: </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($propertyOption){{ $propertyOption->name }}@endisset">
                            </div>
                        </div>

                            <br>
                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') EN: </label>
                                <div class="col-sm-6">
                                    @error('name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="name_en" id="name_en"
                                           value="@isset($propertyOption){{ $propertyOption->name_en }}@endisset">
                                </div>
                            </div>
                            <br>
                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') LV: </label>
                                <div class="col-sm-6">
                                    @error('name_lv')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="name_lv" id="name_lv"
                                           value="@isset($propertyOption){{ $propertyOption->name_lv }}@endisset">
                                </div>
                            </div>
                        <button class="btn btn-success">@lang('main.save')</button>
                    </div>
                </form>
    </div>
@endsection

