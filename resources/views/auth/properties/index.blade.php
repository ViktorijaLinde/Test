@extends('auth.layouts.master')

@section('title') @lang('auth.property') @endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.property')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('auth.name')
                </th>
                <th>
                    @lang('auth.action')
                </th>
            </tr>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->name_en }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('properties.destroy', $property) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('properties.show', $property) }}">@lang('auth.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('properties.edit', $property) }}">@lang('auth.edit')</a>
                                <a class="btn btn-primary" type="button" href="{{ route('property-options.index', $property) }}">@lang('auth.prop_val')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('auth.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $properties->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('properties.create') }}">Add property</a>
    </div>
@endsection
