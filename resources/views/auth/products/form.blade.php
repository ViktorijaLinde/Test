@extends('auth.layouts.master')

@isset($product)
    @section('title') @lang('auth.edit_prod') {{$product->name_en}} @endsection
@else
    @section('title') @lang('auth.create_prod') @endsection
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>@lang('auth.edit_prod')<b>{{ $product->name_en }}</b></h1>
        @else
            <h1>@lang('auth.add_prod')</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">@lang('auth.code'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'code'])
                        <input type="text" class="form-control" name="code" id="code"
                               value="@isset($product){{ $product->code }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') RU: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name'])
                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>
                <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') EN: </label>
                        <div class="col-sm-6">
                            @include('auth.layouts.error', ['fieldName' => 'name_en'])
                            <input type="text" class="form-control" name="name_en" id="name_en"
                                   value="@isset($product){{ $product->name_en }}@endisset">
                        </div>
                    </div>
                                <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">@lang('auth.name') LV: </label>
                        <div class="col-sm-6">
                            @include('auth.layouts.error', ['fieldName' => 'name_lv'])
                            <input type="text" class="form-control" name="name_lv" id="name_lv"
                                   value="@isset($product){{ $product->name_lv }}@endisset">
                        </div>
                    </div>
                    <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">@lang('auth.category'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'category_id'])
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @isset($product)
                                        @if($product->category_id == $category->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{ $category->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">@lang('auth.image'): </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            @lang('auth.upload') <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <br>

                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">@lang('auth.properties'): </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'property_id[]'])
                        <select name="property_id[]" multiple>
                            @foreach($properties as $property)
                                <option value="{{ $property->id }}"
                                    @isset($product)
                                        @if($product->properties->contains($property->id))
                                        selected
                                    @endif
                                    @endisset
                                >{{ $property->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                @foreach ([
                'hit' => 'Hit',
                'new' => 'New',
                'recommend' => 'Recommend'
                ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{ $title }}: </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{$field}}" id="{{$field}}"
                            @if(isset($product) && $product->$field === 1)
                                   checked="'checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach
                <button class="btn btn-success">@lang('auth.save')</button>
            </div>
        </form>
    </div>
@endsection
