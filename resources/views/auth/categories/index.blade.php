@extends('auth.layouts.master')

    @section('title') 
@lang('auth.add_cat')
@endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.categories')</h1>
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
                    @lang('auth.name')
                </th>
                <th>
                    @lang('auth.actions')
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name_en }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('categories.show', $category) }}">@lang('auth.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">@lang('auth.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('auth.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('categories.create') }}">@lang('auth.add_cat')</a>
    </div>
@endsection
