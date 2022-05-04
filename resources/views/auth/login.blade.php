@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <input name="email" type="email" />
        <input name="password" type="password" />
        <button type="submit">Me connecter</button>
    </form>
@endsection
