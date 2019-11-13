@extends('principal')


@section('cabecalho')

 <h2>Editar Cientista</h2>

@endsection('cabecalho')

@section('conteudo')

 <form action= "{{action('CientistasController@salvar', $cientista->id)}}" method="POST">
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
     <label>CICM </label>
     <input type="text" name="cicm"  value="{{$cientista->cicm}}"/>
     <label>Nome</label>
     <input type="text" name="nome" value="{{$cientista->nome}}" />
     <label>Formação</label>
     <input type="text" name="formacao" value="{{$cientista->formacao}}"/>

    <button type="submit" class="btn btn-light btn-lg" >Salvar</button>
 </form>


@endsection('conteudo')
