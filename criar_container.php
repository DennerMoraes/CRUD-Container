<h1 class="mb-5 mt-5 text-primary">CRIAR CONTAINER</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div>
        <label for="">Nome</label>
        <input type="text" name="nome" class="mb-5 form-control" >
    </div>

    <div>
        <label for="">Número do o contêiner</label>
        <input type="text" name="numero" class="mb-5 form-control" placeholder="Exemplo: TEST1234567">
    </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                </div>
                <select name="tipo" class="custom-select" id="inputGroupSelect01">
                    <option value="20">20</option>
                    <option value="40">40</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                </div>
                <select name="status" class="custom-select" id="inputGroupSelect01">
                    <option value="Cheio">Cheio</option>
                    <option value="Vazio">Vazio</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                </div>
                <select name="categoria" class="custom-select" id="inputGroupSelect01">
                    <option value="Importacao">Importação</option>
                    <option value="Exportacao">Exportação</option>
                </select>
            </div>


            <div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
			
</form>