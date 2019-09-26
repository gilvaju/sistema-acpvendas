@extends('layouts.app')

@section('content')
    <h1>MATERSOL</h1>

    <ul>
        @foreach($sales as $sale)
            <li>{{ $sale->value }}</li>
        @endforeach
    </ul>
@endsection