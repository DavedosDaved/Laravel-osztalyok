@extends('layouts.app')

@section('title', __('Osztály módosítása'))

@section('content')
    <h1>{{ __('Osztály módosítása') }}</h1>

    <form action="{{ route('osztalyok.update', $osztaly->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label class="form-label" for="name">{{ __('Osztály neve') }}</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $osztaly->name) }}" required>
        @error('name')
        <div class="text-danger small">{{ $message }}</div>
        @enderror

        <button class="btn btn-outline-dark mt-3" type="submit">{{ __('Mentés') }}</button>
        <a class="btn btn-outline-dark mt-3" href="{{ route('osztalyok.index') }}">{{ __('Mégse') }}</a>
    </form>
@endsection
