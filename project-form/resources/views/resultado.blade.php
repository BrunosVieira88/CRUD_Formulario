@extends('layouts.app')
@section('content')  
<section class="container mt-5">
        <table id="tabela" class="table table-striped table-bordered table-hover table-dark ">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Cep</th>
                        <th>CPF</th>
                        <th>rua</th>
                        <th>Cidade</th>
                        <th>Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultado as $item)
                        <tr>
                            <td>{{$item->nome}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->telefone}}</td>
                            <td>{{$item->cep}}</td>
                            <td>{{$item->cpf}}</td>
                            <td>{{$item->rua}}</td>
                            <td>{{$item->cidade}}</td>
                            <td>{{$item->mensagem}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</section>
<button class="btn btn-primary mt-2" style="margin-left:9%;"><a href="{{ url('/home') }}" style="color:white;text-decoration:none;">Cadastrar Novo Funcionario</a></button>
<script>
    $(document).ready( function () {
            $('#tabela').DataTable();
    });
</script>
@endsection