<h1 class="mb-5 mt-5 text-primary">EDITAR MOVIMENTAÇÕES</h1>

<?php

    $sql = "SELECT * FROM contmov WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>

<form action="?page=salvarmov" method="POST">
    <input type="hidden" name="acao2" value="editar2">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <input type="hidden" name="nummov" value="<?php print $row->nummov;?>">

    <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Movimentação</label>
                </div>
                <select name="mov" value="<?php print $row->movimentacao;?>" class="custom-select" id="inputGroupSelect01">
                    <option value="Embarque">Embarque</option>
                    <option value="Descarga">Descarga</option>
                    <option value="Gatein">Gate in</option>
                    <option value="Gateout">Gate out</option>
                    <option value="Reposicionamento">Reposicionamento</option>
                    <option value="Pesagem">Pesagem</option>
                    <option value="Scanner">Scanner</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Data inicio:</span>
                <input type="datetime-local" value="<?php print $row->datainicio;?>" class="form-control" name="datainicio">
            </div>

            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Data fim:</span>
                <input type="datetime-local" value="<?php print $row->fim;?>" class="form-control" name="datafim">
            </div>

            <div>
            <button type="submit" class="btn btn-primary">Editar</button>
            </div>
</form>
