<!-- adaptar para curso, Curso e professor - criar tres formularios separados -->
<section class="formulario">
    <a href="../Index/index_usuarios.php">
        <button class="btn btn-header btn-lg">Voltar</button>
    </a>

    <h2 class="mt-3"><?php echo TITLE ?></h2>

    <form method="post" class="form-send ">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" required class="form-control" name="nome" value="<?php echo isset($obUsuario->nome) ? $obUsuario->nome : ''; ?>">
        </div>

        <div class="form-group">
            <label>Sobrenome</label>
            <textarea class="form-control" required name="sobrenome" rows="5"><?php echo isset($obUsuario->sobrenome) ? $obUsuario->sobrenome : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Idade</label>
            <textarea class="form-control" required name="idade" rows="1"><?php echo isset($obUsuario->idade) ? $obUsuario->idade : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>CPF</label>
            <textarea class="form-control" required name="cpf" rows="1"><?php echo isset($obUsuario->cpf) ? $obUsuario->cpf : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" required name="descricao" rows="1"><?php echo isset($obUsuario->descricao) ? $obUsuario->descricao : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label>Sexo</label>
            <div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" name="sexo" value="f" <?php echo isset($obUsuario->sexo) && $obUsuario->sexo == 'f' ? 'checked' : ''; ?>>
                        Feminino
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="sexo" value="m" <?php echo isset($obUsuario->sexo) && $obUsuario->sexo == 'm' ? 'checked' : ''; ?>>
                        Masculino
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="sexo" value="i" <?php echo isset($obUsuario->sexo) && $obUsuario->sexo == 'i' ? 'checked' : ''; ?>>
                        Irreconhecido
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Ordem</label>
            <textarea class="form-control" required name="ordem" rows="1"><?php echo isset($obUsuario->ordem) ? $obUsuario->ordem : ''; ?></textarea>
        </div>


        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">

                    <label>
                        <input type="radio" name="status" value="1" <?php echo isset($obUsuario->status) && $obUsuario->status == '1' ? 'checked' : ''; ?>>
                        Ativo
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="status" value="0" <?php echo isset($obUsuario->status) && $obUsuario->status == '0' ? 'checked' : ''; ?>>
                        Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-header btn-lg">Enviar</button>
        </div>
    </form>
</section>