@extends('principal')


@section('cabecalho')

 <h2>Cadastrar novo Cientista</h2>

@endsection('cabecalho')

@section('conteudo')

 <form action= "{{action('CientistasController@salvar', 0)}}" method="POST">
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
     <label>CICM</label>
     <input type="text" name="cicm" />
     <label>Nome</label>
     <input type="text" name="nome"/>
     <label>Formação</label>
     <input type="text" name="formacao"/>

    <button type="submit" class="btn btn-light btn-lg" >Salvar</button>
 </form>


@endsection('conteudo')
