@extends('master')

@section('content')
    <div class="container mt-100 mb-5">
        {{$adminClass??''}}
        @forelse($usersWithProducts as $user)
            <div class="row">
                <div class="col-md-4">{{$user->id}}</div>
                <div class="col-md-4">{{$user->name}}</div>
                <div class="col-md-4">{{$user->product}}</div>
            </div>

        @empty
            <div class="row">
                <div class="col-md-12">Нет пользователей с подписками</div>
            </div>
        @endforelse
    </div>
@endsection
