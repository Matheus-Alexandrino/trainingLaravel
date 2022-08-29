@extends('layouts.layout')

@section('content')
<section>
    <div class="container-fluid">
        <div class="card-group white">
            <div class="card col-sm-4">
                <figure class="image-block bg-dark ">
                    <h1>Feedget</h1>
                    <img src="images/widget2.gif" height="170%"  style="padding:30%;padding-top:50%; margin-left:23%" alt="" />
                    <figcaption>
                        <h3>
                            Mais Informações
                        </h3>
                        <p></p>
                        <button>
                            Mais Informações
                        </button>
                    </figcaption>
                </figure>
            </div>
            <div class="card col-sm-4">
                <figure >
                    <h1 class="text-dark">Ecoleta</h1>
                    <img src="images/ecoleta.jpeg" height="100%" style="padding:30%; padding-top:50%; margin-left:55%"  alt="" />
                    <figcaption>
                        <h3>
                            Mais Informações
                        </h3>
                        <p>Projeto feito na semana NLW da Rockeatseat no ano de 2019, Front-end.</p>
                        <button>
                        Mais Informações
                        </button>
                    </figcaption>
                </figure>
            </div>
            <div class="card col-sm-4">
                <figure class="image-block bg-dark ">
                    <h1>Em andamento...</h1>
                    <img src="images/maintenance.png" height="70%"  style="padding:30%;padding-top:50%; margin-left:23%" alt="" />
                    <figcaption>
                        <h3>
                            Mais Informações
                        </h3>
                        <p></p>
                        <button>
                            Mais Informações
                        </button>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

@endsection