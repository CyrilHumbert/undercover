@extends('layouts.default')

@section('title', 'Waiting rooms')

@section('content')
    <div class="container">
        Hello {{ $data->get('creator_id') }} !
    </div>
@stop

