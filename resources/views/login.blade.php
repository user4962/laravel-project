@extends('layouts.app')

@section('content')
<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" placeholder="Електронна пошта">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Вхід</button>
</form>
@endsection
