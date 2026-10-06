@extends('layouts.app')

@section('content')

    <h1>Diákok</h1>
    <a class="btn btn-outline-dark mb-3" href="{{ route('diakok.create') }}">Új diák</a>
    <table class="table">
        @foreach($diakok as $diak)
            <tr>
                <td>{{ $diak->name }} ({{ $diak->osztaly->name }})</td>
                <td class="text-end">
                    <form action="{{ route('diakok.destroy', $diak->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-sm btn-outline-dark" href="{{ route('diakok.edit', $diak->id) }}">{{ __('Szerkesztés') }}</a>
                        <button class="btn btn-sm btn-outline-dark" type="submit">{{ __('Törlés') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
