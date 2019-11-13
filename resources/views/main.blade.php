@extends('principal')


@section('cabecalho')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{url('/img/thesims.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('/img/thesims2.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('/img/thesims3.png')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

@endsection('cabecalho')

@section('conteudo')

<h2><B>What is StrangerVille?</B></h2> <br><br>

<div class="card">
    <div class="card-body">
        <p>
                Olá visitante! Seja bem vind@ ao nosso site! <BR>
                Strangerville é um pacato vilarejo localizado no Texas - EUA. Num primeiro relance
                nada foge do ordinário. Crianças felizes, pais atarefados, vovós carinhosas.
                Entretanto, nem tudo é tão sem graça quanto parece ser... <br>
                De acordo com Oscar Wilde, a normalidade é uma ilusão imbecil e estéril. Aqui em Strangerville
                esse é o lema que rege a vida. Situado na cratera resultante do impacto de um meteoro, que atigiu a cidade em 1920,
                está o Secret Lab. Este
        </p>
    </div>
  </div> <br><br>



<h2><B>Registers</B></h2> <br><br>

<div class="card">
    <div class="card-body">
            <a href="/cobaias"><img src="{{url('/img/cobaia_ico.png')}}"  width='350' height='500' /></a>
            <a href="/cientistas"><img src="{{url('/img/cientista_ico.png')}}"  width='550' height='540' /></a>

    </div>
  </div>



@endsection('conteudo')




