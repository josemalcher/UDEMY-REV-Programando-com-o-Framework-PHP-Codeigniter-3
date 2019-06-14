<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo 'Administrar ' . $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo 'Adicionar novo ' . $subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo validation_errors();
                                echo form_open('admin/usuarios/inserir');
                                ?>
                            <div class="form-group">
                                <label id="txt-usuario">Nome do Usuário</label>
                                <input type="text" name="txt-usuario" class="form-control" placeholder="Digite o nome do usuário">
                            </div>
                            <div class="form-group">
                                <label id="txt-email">Email</label>
                                <input type="text" name="txt-email" class="form-control" placeholder="Digite o Email">
                            </div>
                            <div class="form-group">
                                <label id="txt-usuario">Histórico</label>
                                <textarea name="txt-historico" class="form-control" placeholder="Digite o histórico"></textarea>
                            </div>
                            <div class="form-group">
                                <label id="txt-usuario">User</label>
                                <input type="text" name="txt-user" class="form-control" placeholder="Digite o user do usuário">
                            </div>
                            <div class="form-group">
                                <label id="txt-usuario">Senha</label>
                                <input type="password" name="txt-senha" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label id="txt-usuario">Confirme a Senha</label>
                                <input type="password" name="txt-senha" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-default">Cadastrar</button>
                            <?php
                                echo form_close();
                            ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo 'Alterar ' . $subtitulo . ' existente' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            $this->table->set_heading("Foto","NOme da Categoria", "Alterar", "Excluir");
                            foreach ($usuarios as $usuarios) {
                                $nomeuser = $usuarios->nome;
                                $fotouser = "Foto";
                                $alterar = anchor(base_url('admin/usuario/alterar/'. md5($usuarios->id)), '<i class="fa fa-refresh fa-fw"></i> Alterar');
                                $excluir = anchor(base_url('admin/usuario/excluir/'. md5($usuarios->id)), '<i class="fa fa-remove fa-fw"></i> Excluir');

                                $this->table->add_row($fotouser, $nomeuser, $alterar, $excluir);
                            }
                            $this->table->set_template(array(
                                'table_open' => '<table class="table table-striped">'
                            ));
                            echo $this->table->generate();
                            ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>

<!--<form role="form">
    <div class="form-group">
        <label>Titulo</label>
        <input class="form-control" placeholder="Entre com o texto">
    </div>
    <div class="form-group">
        <label>Foto Destaque</label>
        <input type="file">
    </div>
    <div class="form-group">
        <label>Conteúdo</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Selects</label>
        <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Cadastrar</button>
    <button type="reset" class="btn btn-default">Limpar</button>
</form>-->