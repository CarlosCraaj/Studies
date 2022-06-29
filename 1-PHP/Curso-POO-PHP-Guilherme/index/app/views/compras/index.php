<?php $this->tituloPagina = "Lista de Compras" ?>

<?php $this->layout('layout.topo'); ?>
    
    <section class="content-header">
        <h1>
            Lista de Compras
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>   
    <section class="content">


        <div class="row">
            <a href="/compras/adicionar">Criar</a>
        </div>
        <div class="row">
            <ul>
                <?php foreach ($this->modelo as $key => $value): ?>
                    <li>
                        <?php echo $value['titulo'] ?> - <?php echo $value['desc'] ?>
                        
                        <form action="/compras/deletar/<?php echo $value['id'] ?>" method="post">
                            <a href="/compras/detalhe/<?php echo $value['id'] ?>"><button class="btn btn-primary" type="button">Detalhe</button></a>
                            <a href="/compras/editar/<?php echo $value['id'] ?>"><button class="btn btn-primary" type="button">Editar</button></a>
                            <input type="hidden" name="_METHOD" value="delete">
                            <button class="btn btn-primary">Deletar</button>
                        </form>
                    
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>     

<?php $this->layout('layout.rodape'); ?>