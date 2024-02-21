@extends('layouts.app')

@section('content')
<form method="POST" action="/edit/{{ $participant->id }}">
    @csrf
    <input type="text" name="name" value="{{ $participant->name }}">
    <input type="text" name="surname" value="{{ $participant->surname }}">
    <select name="gender">
        <option value="male" @if ($participant->gender == 'male') selected @endif>Чоловіча</option>
        <option value="female" @if ($participant->gender == 'female') selected @endif>Жіноча</option>
    </select>
    <input type="text" name="nationality" value="{{ $participant->nationality }}">
    <input type="text" name="organization" value="{{ $participant->organization }}">
    <input type="text" name="position" value="{{ $participant->position }}">
    <input type="date" name="birthdate" value="{{ $participant->birthdate }}">
    <input type="email" name="email" value="{{ $participant->email }}">
    <button type="submit">Зберегти</button>
</form>
@endsection
