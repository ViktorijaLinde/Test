@extends('auth.layouts.master')

@isset($property)
    @section('title') @lang('auth.edit_prop') {{$property->name}} @endsection
@else
    @section('title') @lang('auth.create_prop')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($property)
            <h1>@lang('auth.edit_prop') <b>{{ $property->name_en }}</b></h1>
                @else
                    <h1>@lang('auth.add_prop')</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($property)
                      action="{{ route('properties.update', $property) }}"
                      @else
                      action="{{ route('properties.store') }}"
                    @endisset
                >
                    <div>
                        @isset($property)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') RU: </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($property){{ $property->name }}@endisset">
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
                                           value="@isset($property){{ $property->name_en }}@endisset">
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
                                           value="@isset($property){{ $property->name_lv }}@endisset">
                                </div>
                            </div>
                        <button class="btn btn-success">@lang('main.save')</button>
                    </div>
                </form>
    </div>
@endsection

