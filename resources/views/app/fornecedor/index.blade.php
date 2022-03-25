<h3>Forneceeeeeeeedor</h3>



{{-- Comentário descartado --}}

@php

echo 'Olá mundo!';


@endphp


@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Fornecedor</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores Fornecedores</h3>
@endif

