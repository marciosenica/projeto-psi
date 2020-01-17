<h1>novo utilizador</h1>
<?php
    echo $this->Form->create($utilizadores);
	echo $this->Form->control('username');
	echo $this->Form->control('pass');
    echo $this->Form->control('nome');
    echo $this->Form->control('idade');
    echo $this->Form->control('telefone');
    echo $this->Form->control('morada');
    echo $this->Form->button(__('criar utilizador'));
    echo $this->Form->end();
?>