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
                    <?php echo 'Alterar ' . $subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo validation_errors();
                                echo form_open('admin/categoria/salvar_alteracoes');

                                foreach ($categorias as $categoria){
                                ?>
                                 <div class="form-group">
                                    <label id="txt-categoria">Nome da Categoria</label>
                                    <input type="text" id="txt-categoria" name="txt-categoria" class="form-control"
                                           value="<?php echo $categoria->titulo?>"
                                           placeholder="Digite o nome da categoria">
                                 </div>
                                    <input type="hidden" id="txt-id" name="txt-id" value="<?php echo $categoria->id?>">
                                 <button type="submit" class="btn btn-default">Atualizar</button>
                            <?php
                                }
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