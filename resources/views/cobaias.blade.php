@extends('principal')


@section('cabecalho')

    <br>
 <h2>Cobaias Cadastradas</h2>

@endsection('cabecalho')

@section('conteudo')




        <a href="{{action('CobaiaController@cadastrar')}}" type = "button" class="btn btn-light btn-lg">
            <b>Cadastrar nova Cobaia</b>
        </a>

        <br>

        <form action="{{ action('CobaiaController@buscar')}}" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

            <label>Número de Série: </label><br>
            <input type="text" name="numero_serie"> <br>
            <button type="submit">Pesquisar</button>

        </form>
    <table class="table table-striped">

        <thead>
            <th>ID</th>
            <th>Número de Série</th>
            <th>Gênero</th>
            <th>Idade</th>
            <th>Ações</th>
            </thead>
        <tbody>

            @foreach ($cobaias as $dados)
            <tr>
            <td>{{$dados->id}}</td>
            <td>{{$dados->numero_serie}}</td>
            <td>{{$dados->genero}}</td>
            <td>{{$dados->idade}}</td>
            <td>
                <a href="{{action('CobaiaController@editar', $dados->id)}}">Editar</a>
                <a href="{{action('CobaiaController@deletar', $dados->id)}}">Deletar</a>
            </td>
            </tr>
            @endforeach

        </tbody>
    </table>




@endsection('conteudo')
