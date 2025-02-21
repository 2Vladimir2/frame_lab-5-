@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Личный кабинет</h2>

    <h2>Добро пожаловать, {{ auth()->user()->name }}!</h2>

    @if(auth()->user()->role === 'admin')
        <h3>Вы вошли как Администратор.</h3>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Список пользователей</a>
    @else
        <h3>Вы вошли как Обычный пользователь.</h3>
    @endif

    <form action="{{ url('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Выйти</button>
    </form>
</div>
@endsection
