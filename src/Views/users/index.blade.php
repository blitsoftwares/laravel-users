@extends('layouts.app')

@section('content')
    <a href="{{ route('users.create') }}"><button class="btn btn-default">{{ trans('BlitUsers::users.new-register') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('BlitUsers::users.users') }}</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('BlitUsers::users.table-header.name') }}</th>
                        <th>{{ trans('BlitUsers::users.table-header.email') }}</th>
                        <th>{{ trans('BlitUsers::users.table-header.active') }}</th>
                        <th>{{ trans('BlitUsers::users.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $obj)
                    <tr>
                        <td>{{ $obj->id }}</td>
                        <td>{{ $obj->name }}</td>
                        <td>{{ $obj->email }}</td>
                        <td>{{ $obj->active ? 'Sim': 'Não' }}</td>
                        <td>
                            <form action="{{ route('users.destroy',$obj->id) }}" method="POST">
                                <div class="btn-group btn-group-sm">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-sm btn-default">{{ trans('BlitUsers::users.delete') }}</button>
                                    <a href="{{ route('users.edit',[$obj->id]) }}"><button type="button" class="btn btn-sm btn-default">{{ trans('BlitUsers::users.edit') }}</button></a>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
        </div>
    </div>
@endsection