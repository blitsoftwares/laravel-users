@extends('layouts.app')

@section('content')
    <a href="{{ route('users.index') }}"><button class="btn btn-default">{{ trans('BlitUsers::users.route-back') }}</button></a>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('BlitUsers::users.users') }}</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('users.update',$user->id) }}">

                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group col-md-6">
                    <label for="name" class="control-label">{{ trans('BlitUsers::users.fields.name') }}*</label>
                    <input id="name" name="name" type="text" class="form-control"  value="{{ $user->name }}" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="email" class="control-label">{{ trans('BlitUsers::users.fields.email') }}*</label>
                    <input id="email" name="email" type="email" class="form-control"  value="{{ $user->email }}" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="password" class="control-label">{{ trans('BlitUsers::users.fields.password') }}</label>
                    <input id="password" name="password" type="password" class="form-control"  value="" >
                </div>

                <div class="form-group col-md-6">
                    <label for="password_confirmation" class="control-label">{{ trans('BlitUsers::users.fields.password_confirmation') }}</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"  value="" >
                </div>

                <div class="form-group col-md-3">
                    <label for="active" class="col-md-4 control-label">
                        {{ trans('BlitUsers::users.fields.active') }}
                        <input type="checkbox" id="active" name="active" value="1" @if($user->active) checked @endif>
                    </label>

                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('BlitUsers::users.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection