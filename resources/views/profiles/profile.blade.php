@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}'s profile
                </div>
                <div class="panel-body">

                    <img src="{{ Storage::url($user->avatar) }}" width="70" height="70" style="border: 50%;" alt="">

                </div>
            </div>
        </div>

    </div>

@stop
