@extends('site._partials.master')

@section('content')
    <div class="container">
        <h1 class="mt-5">Cadastro de Alunos</h1>
        <form action="/alunos" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Nome do Aluno" required> <br>
                <input type="date" class="form-control" name="dataNascimento" placeholder="Data de Nascimento"><br>
                <input type="text" class="form-control" name="nomeMae" placeholder="Nome da Mãe"><br>
                <input type="text" class="form-control" name="nomePai" placeholder="Nome do Pai"><br>
                <input type="string" class="form-control"  name="telefone" placeholder="Telefone para contato"><br>
                <input type="email" class="form-control" name="email" placeholder="Email"><br>
                <input type="string" class="form-control" name="endereco" placeholder="Endereço"><br>
                <input type="text" class="form-control" name="observacao" placeholder="Observação"> <br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
    
@endsection