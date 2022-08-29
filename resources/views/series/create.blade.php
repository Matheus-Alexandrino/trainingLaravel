@extends('layouts.layout')

@section('content')
<div class="card container mt-36">

    <form action="/series/salvar" method="POST" class="action">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input  type="text" id="nome" name="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
@endsection
