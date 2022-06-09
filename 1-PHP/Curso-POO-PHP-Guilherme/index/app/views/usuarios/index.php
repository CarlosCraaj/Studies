<?php $this->tituloPagina = "Lista de Usuários" ?>

<?php $this->layout('layout.topo'); ?>
        <h2>Lista de Usuarios</h2>

        <a href="/usuarios/adicionar">Criar</a>
        <ul>
            <?php foreach ($this->modelo as $key => $value): ?>
                <li>
                    <?php echo $value['nome'] ?> - <?php echo $value['email'] ?>
                    
                    <form action="/usuarios/deletar/<?php echo $value['id'] ?>" method="post">
                        <input type="hidden" name="_METHOD" value="delete">
                        <a href="/usuarios/detalhe/<?php echo $value['id'] ?>"><button type="button">Detalhe</button></a>
                        <a href="/usuarios/editar/<?php echo $value['id'] ?>"><button type="button">Editar</button></a>
                        <button>Deletar</button>
                    </form>
                
                </li>
            <?php endforeach ?>
        </ul>

<?php $this->layout('layout.rodape'); ?>