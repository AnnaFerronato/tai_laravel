@extends('principal')


@section('cabecalho')

 <h2>Editar Cobaia</h2>

@endsection('cabecalho')

@section('conteudo')

 <form action= "{{action('CobaiaController@salvar', $cobaia->id)}}" method="POST">
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
     <label>Número de Série </label>
     <input type="text" name="numero_serie"  value="{{$cobaia->numero_serie}}"/>
     <label>Gênero</label>
     <input type="text" name="genero" value="{{$cobaia->genero}}" />
     <label>Idade</label>
     <input type="text" name="idade" value="{{$cobaia->idade}}"/>

    <button type="submit" class="btn btn-light btn-lg" >Salvar</button>
 </form>


@endsection('conteudo')
