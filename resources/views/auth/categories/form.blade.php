@extends('auth.layouts.master')

@isset($category)
    @section('title') 
    @lang('main.edit_cat'){{$category->name}} @endsection
@else
    @section('title') 
@lang('auth.add_cat')
@endsection
@endisset

@section('content')
    <div class="col-md-12">
        @isset($category)
            <h1>@lang('auth.edit_cat')<b>{{ $category->name_en }}</b></h1>
                @else
                    <h1>@lang('auth.add_cat')</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($category)
                      action="{{ route('categories.update', $category) }}"
                      @else
                      action="{{ route('categories.store') }}"
                    @endisset
                >
                    <div>
                        @isset($category)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="code" class="col-sm-2 col-form-label">@lang('auth.code'): </label>
                            <div class="col-sm-6">
                                @error('code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="code" id="code"
                                       value="{{ old('code', isset($category) ? $category->code : null) }}">
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') RU: </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($category){{ $category->name }}@endisset">
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
                                           value="@isset($category){{ $category->name_en }}@endisset">
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
                                           value="@isset($category){{ $category->name_lv }}@endisset">
                                </div>
                            </div>

                        <div class="input-group row">
                            <label for="image" class="col-sm-2 col-form-label">@lang('auth.image'): </label>
                            <div class="col-sm-10">
                                <label class="btn btn-default btn-file">
                                    @lang('auth.upload') <input type="file" style="display: none;" name="image" id="image">
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-success">@lang('auth.save')</button>
                    </div>
                </form>
    </div>
@endsection

