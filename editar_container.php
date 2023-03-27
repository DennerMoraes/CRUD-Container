<h1 class="mb-5 mt-5 text-primary">EDITAR CONTAINER</h1>

<?php

$sql = "SELECT * FROM continfo WHERE id=".$_REQUEST["id"];

$res = $conn->query($sql);

$row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">

    <div>
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php print $row->cliente;?>" class="mb-5 form-control" >
    </div>

    <div>
        <label for="">Número do o contêiner</label>
        <input type="text" name="numero" value="<?php print $row->numero;?>" class="mb-5 form-control" placeholder="Exemplo: TEST1234567">
    </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                </div>
                <select name="tipo" value="<?php print $row->tipo;?>" class="custom-select" id="inputGroupSelect01">
                    <option value="20">20</option>
                    <option value="40">40</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                </div>
                <select name="status" value="<?php print $row->statuss;?>" class="custom-select" id="inputGroupSelect01">
                    <option value="Cheio">Cheio</option>
                    <option value="Vazio">Vazio</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                </div>
                <select name="categoria" value="<?php print $row->categoria;?>" class="custom-select" id="inputGroupSelect01">
                    <option value="Importacao">Importação</option>
                    <option value="Exportacao">Exportação</option>
                </select>
            </div>


            <div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
			
</form>