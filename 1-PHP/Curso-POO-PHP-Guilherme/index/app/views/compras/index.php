<?php $this->tituloPagina = "Lista de Compras" ?>

<?php $this->layout('layout.topo'); ?>
        <h2>Lista de Compras</h2>

        <a href="/compras/adicionar">Criar</a>
        <ul>
            <?php foreach ($this->modelo as $key => $value): ?>
                <li>
                    <?php echo $value['titulo'] ?> - <?php echo $value['desc'] ?>
                    
                    <form action="/compras/deletar/<?php echo $value['id'] ?>" method="post">
                        <a href="/compras/detalhe/<?php echo $value['id'] ?>"><button type="button">Detalhe</button></a>
                        <a href="/compras/editar/<?php echo $value['id'] ?>"><button type="button">Editar</button></a>
                        <input type="hidden" name="_METHOD" value="delete">
                        <button>Deletar</button>
                    </form>
                
                </li>
            <?php endforeach ?>
        </ul>

<?php $this->layout('layout.rodape'); ?>