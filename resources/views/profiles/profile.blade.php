@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="col-lg-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}'s profile
                </div>
                <div class="panel-body">
                    <p class="text-center">
                        <img src="{{ Storage::url($user->avatar) }}" width="140" height="140" style="border: 50%;" alt="">
                    </p>
                </div>
                <br>
                <p class="text-center">
                    {{ $user->profile->location }}
                </p>
                <br>
                <p class="text-center">
                    @if(Auth::id() == $user->id)
                        <a href="{{ route('profile.edit') }}" class="btn btn-lg btn-info">
                            Edit Your Profile
                        </a>
                    @endif
                </p>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="text-center">
                        About me
                    </p>
                </div>
                <div class="panel-body">
                    <p class="text-center">
                        {{ $user->profile->about }}
                    </p>
                </div>
            </div>

        </div>

    </div>

@stop
