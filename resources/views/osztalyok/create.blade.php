@extends('layouts.app')

@section('title', __('Új osztály létrehozása'))

@section('content')
    <h1>{{ __('Új osztály') }}</h1>

    <form action="{{ route('osztalyok.store') }}" method="POST">
        @csrf

        <label class="form-label" for="name">{{ __('Osztály neve') }}</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" required>
        @error('name')
        <div class="text-danger small">{{ $message }}</div>
        @enderror

        <button class="btn btn-outline-dark mt-3" type="submit">{{ __('Mentés') }}</button>
        <a class="btn btn-outline-dark mt-3" href="{{ route('osztalyok.index') }}">{{ __('Mégse') }}</a>
    </form>
@endsection
