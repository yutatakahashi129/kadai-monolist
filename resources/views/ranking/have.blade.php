@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    @include('items.haves', ['items' => $items])
@endsection