<h1>oii</h1>



@if(count($suppliers) > 0 && count($suppliers) < 10)
    <h3> Existem alguns fornecedores cadastrados</h3>
@elseif(count($suppliers > 10))
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif
