@extends('layouts.master')

@section('title', __('main.product'))

@section('content')
    <h1>{{ $skus->product->__('name') }}</h1>
    <h2>{{ $skus->product->category->name }}</h2>
    <p>@lang('product.price'): <b>{{ $skus->price }} €</b></p>

    @isset($skus->product->properties)
        @foreach ($skus->propertyOptions as $propertyOption)
            <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
        @endforeach
    @endisset

    <img src="{{ Storage::url($skus->product->image) }}">

    @if($skus->isAvailable())
        <form action="{{ route('basket-add', $skus->product) }}" method="POST">
            <button type="submit" class="btn btn-success" role="button">@lang('product.add_to_cart')</button>

            @csrf
        </form>
    @else

        <span>@lang('product.not_available')</span>
    @endif
@endsection
