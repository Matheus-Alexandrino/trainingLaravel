@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="card col-12 mt-2 ">
        <div class="card-body">
            <form action="}" method="GET">
                @csrf
                <div class="row ">

                    <div class="col-sm-4 col-md-4 ">
                        <div class="form-group ">
                            <div class="left-inner-addon">
                                <i class="fas fa-search"></i>
                                <input type="text" id="search" name="search" class="form-control form-control-lg" placeholder="Digite o nome da série...">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-md-2 ">
                        <div class="form-group">
                            <button type="submit " class="btn btn-primary">FILTRAR</button>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 ">
                        <div class="form-group float-right">
                            <a class="btn btn-primary" href="series/criar">Cadastrar Série</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body ">
                <table id="data-tables-pedido2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="thead-dark text-center">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>NOME</th>
                            <th>CRIADO EM:</th>
                            <th>AÇÃO</th>
                        </tr>
                    </thead>
                    @foreach ($series as $serie)
                    <tbody class="text-center">
                        <td> {{ $serie->id }} </td>
                        <td>{{ $serie->nome }}</td>
                        <td>{{ $serie->created_at }}</td>
                        <td class="text-center">
                        
                            <form action="" method="POST" class="action">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="serie" value="{{ $serie->id }}">
                                <button type="submit " class="btn btn-danger " href=""><i class="fa fa-trash "></i> Excluir</button>
                            </form>
                        </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<!-- <script>
        const series = {{ Js::from($series) }};
    </script> -->

@endsection