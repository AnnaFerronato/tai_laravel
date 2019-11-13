@extends('principal')


@section('cabecalho')

 <h2>Cientistas Cadastradas</h2>

@endsection('cabecalho')

@section('conteudo')

    <a href="{{action('CientistasController@cadastrar')}}" type = "button" class="btn btn-light btn-lg">
        <b>Cadastrar novo Cientista</b>
    </a>

    <br>

    <form action="{{ action('CientistasController@buscar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

        <label>Nome: </label><br>
        <input type="text" name="nome"> <br>
        <button type="submit">Pesquisar</button>

    </form>

<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>CIMC</th>
        <th>Nome</th>
        <th>Formação</th>
        <th>Ações</th>
    </thead>
    <tbody>

        @foreach ($cientistas as $dados)
        <tr>
        <td>{{$dados->id}}</td>
        <td>{{$dados->cicm}}</td>
        <td>{{$dados->nome}}</td>
        <td>{{$dados->formacao}}</td>
        <td>
            <a href="{{action('CientistasController@editar', $dados->id)}}">Editar</a>
            <a href="{{action('CientistasController@deletar', $dados->id)}}">Deletar</a>
        </td>
        </tr>

        @endforeach

    </tbody>
</table>



@endsection('conteudo')
