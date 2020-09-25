@extends('auth.layouts.master')

@section('title') @lang('auth.prop_opt')@endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.prop_opt')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('auth.property')
                </th>
                <th>
                    @lang('auth.name')
                </th>
                <th>
                    @lang('auth.action')
                </th>
            </tr>
            @foreach($propertyOptions as $propertyOption)
                <tr>
                    <td>{{ $propertyOption->id }}</td>
                    <td>{{ $property->name_en }}</td>
                    <td>{{ $propertyOption->name_en }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('property-options.destroy', [$property, $propertyOption]) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('property-options.show', [$property, $propertyOption]) }}">@lang('auth.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('property-options.edit', [$property, $propertyOption]) }}">@lang('auth.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('auth.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $propertyOptions->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('property-options.create', $property) }}">@lang('auth.add_prop_opt')</a>
    </div>
@endsection
