@extends('layouts.app')

@section('content')
<form method="POST" action="/register">
    @csrf
    <input type="text" name="name" placeholder="Ім'я">
    <input type="text" name="surname" placeholder="Прізвище">
    <select name="gender">
        <option value="male">Чоловіча</option>
        <option value="female">Жіноча</option>
    </select>
    <input type="text" name="nationality" placeholder="Національність">
    <input type="text" name="organization" placeholder="Організація">
    <input type="text" name="position" placeholder="Посада">
    <input type="date" name="birthdate">
    <input type="email" name="email" placeholder="Електронна пошта">
    <input type="password" name="password" placeholder="Пароль">
    <input type="password" name="password_confirmation" placeholder="Підтвердження пароля">
    <button type="submit">Реєстрація</button>
</form>
@endsection
