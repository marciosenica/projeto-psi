<h1>Adicionar novo produto</h1>
<?php
    echo $this->Form->create($produtos);
	echo $this->Form->control('ID_adm');
	echo $this->Form->control('ID_categoria');
    echo $this->Form->control('nome');
    echo $this->Form->control('quantidade');
    echo $this->Form->control('preco');
    echo $this->Form->button(__('Salvar produto'));
    echo $this->Form->end();
?>