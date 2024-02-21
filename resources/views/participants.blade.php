@extends('layouts.app')

@section('content')
<table>
    @foreach ($participants as $participant)
        <tr>
            <td>{{ $participant->name }} {{ $participant->surname }}</td>
            <td>{{ $participant->organization }}</td>
            <td>{{ $participant->email }}</td>
            <td><a href="/edit/{{ $participant->id }}">Редагувати</a></td>
        </tr>
    @endforeach
</table>
@endsection
