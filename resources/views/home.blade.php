@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    {{$message}}
                </div>
                @endif
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if(Auth::user()->role == '2')
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Proprietário</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Renavam</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $veiculos as $veiculo )
                            <option value="{{ $veiculo->modelo }}"></option>

                            <tr>
                                <th scope="row">{{ $veiculo->id }}</th>
                                <td>{{ $veiculo->proprietario }}</td>
                                <td>{{ $veiculo->modelo }}</td>
                                <td>{{ $veiculo->placa }}</td>
                                <td>{{ $veiculo->marca }}</td>
                                <td>{{ $veiculo->ano }}</td>
                                <td>{{ $veiculo->renavam }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Opções
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ url('/veiculos/editar/'. $veiculo->id ) }}">Editar</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/veiculos/excluir/'. $veiculo->id ) }}">Deletar</a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                            <a href="{{ route('registrar_veiculo') }}" class="btn btn-primary" role="button"
                                data-bs-toggle="button">Novo Registro</a><br><br>
                        </tbody>
                    </table>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Proprietário</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Renavam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $clients as $client )
                            <option value="{{ $client->modelo }}"></option>

                            <tr>
                                <th scope="row">{{ $client->id }}</th>
                                <td>{{ $client->proprietario }}</td>
                                <td>{{ $client->modelo }}</td>
                                <td>{{ $client->placa }}</td>
                                <td>{{ $client->marca }}</td>
                                <td>{{ $client->ano }}</td>
                                <td>{{ $client->renavam }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                  {{$veiculos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection