@extends('principal')


@section('cabecalho')

 <h2>Cadastrar nova Cobaia</h2>

@endsection('cabecalho')

@section('conteudo')

 <form action= "{{action('CobaiaController@salvar', 0)}}" method="POST">
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
     <label>Número de Série </label>
     <input type="text" name="numero_serie" />
     <label>Gênero</label>
     <input type="text" name="genero"/>
     <label>Idade</label>
     <input type="text" name="idade"/>

    <button type="submit" class="btn btn-light btn-lg" >Salvar</button>
 </form>


@endsection('conteudo')
