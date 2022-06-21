<?php $this->tituloPagina = "Lista de Compras" ?>

<?php $this->layout('layout.topo'); ?>
    
        <div class="row">
            <h2>Lista de Compras</h2>
        </div>

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

<?php $this->layout('layout.rodape'); ?>