<h1 class="mb-5 mt-5 text-primary">MOSTRAR CONTAINER</h1>

<?php

$sql = "SELECT * FROM continfo";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd>0){
    print"<table class='table table-striped'>";

    print "<tr>";
    print "<td>ID</td>";
    print "<td>Nome</td>";
    print "<td>Número do container</td>";
    print "<td>Tipo</td>";
    print "<td>Status</td>";
    print "<td>Categoria</td>";
    print "<td>Ações</td>";
    print "</tr>";



    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->cliente."</td>";
        print "<td>".$row->numero."</td>";
        print "<td>".$row->tipo."</td>";
        print "<td>".$row->statuss."</td>";
        print "<td>".$row->categoria."</td>";
        print "<td>
                <button onclick=\"location.href='?page=adicionarmov&id=".$row->id."';\" class='btn btn-success' >Add Movimentações</button>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-primary' >Editar</button>
                <button onclick=\"location.href='?page=salvar&acao=excluir&id=".$row->id."';\" class='btn btn-danger' >Excluir</button>
        
        </td>";


        print "</tr>";


    }

    print "</table>";

}else{
    print "<p>Não tem containers</p>";
}