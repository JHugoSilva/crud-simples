<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success mt-2">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3"><?= TITLE; ?></h2>
    <form method="post">
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?= $objVaga->titulo; ?>">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" rows="5"><?= $objVaga->descricao; ?></textarea>
        </div>
        <div class="form-group mt-2">
            <label for="">Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked>Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?= $objVaga->ativo == 'n' ? 'checked':'';?>>Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>