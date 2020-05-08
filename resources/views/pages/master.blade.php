@extends('layouts.default')

@section('title', 'Create rooms')

@section('content')
    <div class="container">
        <form method="POST" action="/finished" class="forms-create-rooms">
            @csrf

            <div class="forms-create-rooms">
                <label for="numberPlayersLabel">Nombre de joueurs : </label>
                <input type="range" name="numberPlayersInputName" id="numberPlayersInputId" required value="4" min="3" max="8" oninput="numberPlayersOutputId.value = numberPlayersInputId.value">
                <output name="numberPlayersOutputName" id="numberPlayersOutputId">4</output>
            </div>

            <div class="forms-create-rooms">
                <label for="numbersTurnsInputLabel">Nombre de tours joué : </label>
                <input type="range" name="numbersTurnsInputName" id="numbersTurnsInputId" required value="10" min="2" max="20" oninput="numbersTurnsOutputId.value = numbersTurnsInputId.value">
                <output name="numbersTurnsOutputName" id="numbersTurnsOutputId">10</output>
            </div>

            <button type="submit">
                Créer la room
            </button>
        </form>
    </div>
@stop

