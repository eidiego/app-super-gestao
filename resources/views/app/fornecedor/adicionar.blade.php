@extends('app.layouts.basico')

@section('titulo', 'Adicionar')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina2 ">
            <p>Fornecedor</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#"> Novo </a></li>
                <li><a href="#"> Consulta </a></li>
            </ul>

        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto" >
                <form method="post" action="">
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type="text" name="site" placeholder="Site" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
                    <button types="submit" class="borda-preta"> Pesquisar </button>
                </form>
            </div>
        </div>
    </div>

@endsection
