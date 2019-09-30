@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row targets">
            <div class="col-2">
                <div class="jumbotron border border-primary card-app">
                    <h6 class="display-4">Meta Inicial Diária</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">3.500</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-primary card-app">
                    <h6 class="display-4">Acumulado do Mês</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">45.850</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-success card-app">
                    <h6 class="display-4">Ticket Médio</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">64,50</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-danger card-app">
                    <h6 class="display-4">Vendido Ontem</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">2.250</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-primary card-app actual-day">
                    <h6 class="display-4">Vendido Hoje</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">2.800</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-primary card-app actual-day">
                    <h6 class="display-4">Meta de Hoje</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">3.800</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row week-days">
            <div class="col-2">
                <div class="jumbotron border border-primary card-app">
                    <h6 class="display-4">Segunda</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">3.500</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-danger card-app">
                    <h6 class="display-4">Terça</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">2.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-danger card-app">
                    <h6 class="display-4">Quarta</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">3.250</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-danger card-app">
                    <h6 class="display-4">Quinta</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">3.250</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-dark card-app">
                    <h6 class="display-4">Sexta (Previsto)</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">4.500</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="jumbotron border border-dark card-app">
                    <h6 class="display-4">Sábado (Previsto)</h6>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <p>R$</p>
                        </div>
                        <div class="col-6">
                            <p class="text-right">4.500</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="section-divide">
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
                                <td>{{ $sale->trade_pieces }} peças</td>
                                <td>R$ {{ $sale->trade_value }}</td>
                                <td>{{ $sale->pieces }} peças</td>
                                <td>R$ {{ $sale->value }}</td>
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
            <div class="col-4 text-right">
                <h4>Inserir Venda</h4>
                <hr class="hr-app">
                <div class="row">
                    <div class="col-12 d-flex flex-row-reverse">
                        <form method="POST" action="{{ route('sales.store') }}">
                            @csrf   
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mb-3 flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="date">/</span>
                                        </div>
                                        <input type="date" class="form-control" name="date" placeholder="Data" aria-label="Data" aria-describedby="date">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3 flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="trade_pieces">QTD</span>
                                        </div>
                                        <input type="number" class="form-control" name="trade_pieces" placeholder="Peças de Troca" aria-label="Peças de Troca" aria-describedby="trade_pieces">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3 flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="trade_value">R$</span>
                                        </div>
                                        <input type="number" step="0.01" class="form-control" name="trade_value" placeholder="Valor de Troca" aria-label="Valor de Troca" aria-describedby="trade_value">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3 flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="pieces">QTD</span>
                                        </div>
                                        <input type="number" class="form-control" name="pieces" placeholder="Peças da Venda" aria-label="Peças da Venda" aria-describedby="pieces">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3 flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="value">R$</span>
                                        </div>
                                        <input type="number" step="0.01" class="form-control" name="value" placeholder="Valor da Venda" aria-label="Valor da Venda" aria-describedby="value">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <button type="submit">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection