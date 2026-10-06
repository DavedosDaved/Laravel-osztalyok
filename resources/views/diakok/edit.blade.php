@extends('layouts.app')

@section('title', __('Diák módosítása'))

@section('content')
    <h1>{{ __('Diák módosítása') }}</h1>

    <form action="{{ route('diakok.update', $diak->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label class="form-label" for="name">{{ __('Diák neve') }}</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $diak->name) }}" required>
        @error('name')
        <div class="text-danger small">{{ $message }}</div>
        @enderror

        <label class="form-label mt-3" for="osztaly_id">{{ __('Osztály') }}</label>
        <select class="form-select" name="osztaly_id" id="osztaly_id" required>
            <option value="">{{ __('Válassz osztályt') }}</option>
            @foreach($osztalyok as $osztaly)
                <option value="{{ $osztaly->id }}" @selected(old('osztaly_id', $diak->osztaly_id) == $osztaly->id)>
                    {{ $osztaly->name }}
                </option>
            @endforeach
        </select>
        @error('osztaly_id')
        <div class="text-danger small">{{ $message }}</div>
        @enderror

        <button class="btn btn-outline-dark mt-3" type="submit">{{ __('Mentés') }}</button>
        <a class="btn btn-outline-dark mt-3" href="{{ route('diakok.index') }}">{{ __('Mégse') }}</a>
    </form>
@endsection
