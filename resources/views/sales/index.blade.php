@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h4>Vendas do Mês</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Data</th>
                            <th scope="col">Peças de Troca</th>
                            <th scope="col">Valor de Troca</th>
                            <th scope="col">Peças da Venda</th>
                            <th scope="col">Valor da Venda</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sales as $sale)
                            <tr>
                                <th scope="row">{{ $sale->id }}</th>
                                <td>{{ $sale->date }}</td>
                                <td>{{ $sale->trade_pieces }}</td>
                                <td>{{ $sale->trade_value }}</td>
                                <td>{{ $sale->pieces }}</td>
                                <td>{{ $sale->value }}</td>
                                <td>
                                    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                                        @csrf   
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
            <div class="col-4">
                <h4>Inserir Venda</h4>
                <div class="row">
                    <form method="POST" action="{{ route('sales.store') }}">
                        @csrf   
                        <div class="input-group mb-3 flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="date">1</span>
                            </div>
                            <input type="date" class="form-control" name="date" placeholder="Data" aria-label="Data" aria-describedby="date">
                        </div>
                        <div class="input-group mb-3 flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="trade_pieces">2</span>
                            </div>
                            <input type="number" class="form-control" name="trade_pieces" placeholder="Peças de Troca" aria-label="Peças de Troca" aria-describedby="trade_pieces">
                        </div>
                        <div class="input-group mb-3 flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="trade_value">3</span>
                            </div>
                            <input type="number" step="0.01" class="form-control" name="trade_value" placeholder="Valor de Troca" aria-label="Valor de Troca" aria-describedby="trade_value">
                        </div>
                        <div class="input-group mb-3 flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="pieces">4</span>
                            </div>
                            <input type="number" class="form-control" name="pieces" placeholder="Peças da Venda" aria-label="Peças da Venda" aria-describedby="pieces">
                        </div>
                        <div class="input-group mb-3 flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="value">5</span>
                            </div>
                            <input type="number" step="0.01" class="form-control" name="value" placeholder="Valor da Venda" aria-label="Valor da Venda" aria-describedby="value">
                        </div>
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection