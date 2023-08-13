<main>
    <h2 class="mt-3">Excluir Vaga</h2>
    <form method="post">
        <div class="form-group">
           <p>Voçê deseja realmente excluir a vaga <strong><?= $objVaga->titulo; ?></strong></p>
        </div>
        <div class="form-group mt-2">
            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Enviar</button>
        </div>
    </form>
</main>