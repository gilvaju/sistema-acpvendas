@extends('layouts.app')

@section('content')

    <h1>MATERSOL</h1>

    <form method="POST" action="{{ route('sales.store') }}">
        @csrf
        
        <label for="date">Data</label>
        <input type="datetime" name="date" id="date">
        
        <label for="trade_pieces">Peças de Troca</label>
        <input type="number" name="trade_pieces" id="trade_pieces">
        
        <label for="trade_value">Valor da Troca</label>
        <input type="number" name="trade_value" step="0.01" id="trade_value">
        
        <label for="pieces">Peças de Venda</label>
        <input type="number" name="pieces" id="pieces">
        
        <label for="value">Valor da Venda</label>
        <input type="number" name="value" step="0.01" id="value">
        
        <button type="submit">Salvar</button>    
    </form>

    
    <ul>
        @foreach($sales as $sale)
            <li>{{ $sale->value_sell }}</li>
        @endforeach
    </ul>

@endsection