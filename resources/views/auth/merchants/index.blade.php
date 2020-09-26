@extends('auth.layouts.master')

@section('title') @lang('auth.merchants') @endsection

@section('content')
    <div class="col-md-12">
        <h1>@lang('auth.merchants')</h1>
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
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
                    @lang('auth.email')
                </th>
                <th>
                    @lang('auth.action')
                </th>
            </tr>
            @foreach($merchants as $merchant)
                <tr>
                    <td>{{ $merchant->id }}</td>
                    <td>{{ $merchant->name }}</td>
                    <td>{{ $merchant->email }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('merchants.destroy', $merchant) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('merchants.show', $merchant) }}">@lang('auth.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('merchants.edit', $merchant) }}">@lang('auth.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('auth.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $merchants->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('merchants.create') }}">@lang('auth.add_merch')</a>
    </div>
@endsection
