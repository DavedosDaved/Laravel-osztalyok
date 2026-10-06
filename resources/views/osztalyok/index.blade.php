@extends('layouts.app')

@section('content')

    <h1>Osztályok</h1>
    <a class="btn btn-outline-dark mb-3" href="{{ route('osztalyok.create') }}">Új osztály</a>
    <table class="table">
        @foreach($osztalyok as $osztaly)
            <tr>
                <td>{{ $osztaly->name }}</td>
                <td class="text-end">
                    <form action="{{ route('osztalyok.destroy', $osztaly->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-sm btn-outline-dark" href="{{ route('osztalyok.edit', $osztaly->id) }}">{{ __('Szerkesztés') }}</a>
                        <button class="btn btn-sm btn-outline-dark" type="submit">{{ __('Törlés') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
