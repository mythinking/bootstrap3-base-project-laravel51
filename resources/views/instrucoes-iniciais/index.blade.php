@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Instruções Iniciais</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Instrução</th>
                        <th colspan="2">Ações</th>
                    </thead>
                    <tbody>
                        @foreach($instrucoes as $instrucao)
                            <tr>
                                <td>{{ $instrucao->id }}</td>
                                <td>{{ $instrucao->instrucaoTxt }}</td>
                                <td><a class="btn btn-warning btn-sm" href="">Editar</a></td>
                                <td><a class="btn btn-danger btn-sm" href="">Excluir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! $instrucoes->render() !!}
            </div>
        </div>
    </div>
@endsection