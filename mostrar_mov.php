<h1 class="mb-5 mt-5 text-primary">MOSTRAR MOVIMENTAÇÕES</h1>

<?php

    $sql = "SELECT * FROM contmov";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd>0){

        print"<table class='table table-striped'>";
    
        print "<tr>";
        print "<td>ID</td>";
        print "<td>Movimentação</td>";
        print "<td>Data e hora inicio</td>";
        print "<td>Data e hora fim</td>";
        print "<td>Quantidade operações</td>";
        print "<td>Ações</td>";
        print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->movimentacao."</td>";
            print "<td>".$row->datainicio."</td>";
            print "<td>".$row->datafim."</td>";
            print "<td>".$row->nummov."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editarmov&id=".$row->id."';\" class='btn btn-primary' >Editar</button>
                    <button onclick=\"location.href='?page=salvarmov&acao2=excluirmov&id=".$row->id."';\" class='btn btn-danger' >Excluir</button>
            </td>";
    
    
            print "</tr>";
    
 
        }
        print "</table>";
        }else{
            print "<p>Não tem movimentações</p>";
        }


    
        

?>