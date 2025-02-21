@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Вход</h2>

    <form action="{{ url('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Электронная почта</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" id="password" name="password" class="form-control">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection
