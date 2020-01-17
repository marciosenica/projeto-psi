<h1>produtos</h1>
<table>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>quantidade</th>
        <th>preço</th>
        
    </tr>
    <?= $this->Html->link('adicionar produto', ['action' => 'add']) ?>
    <br>
    Produtos | <a href="../projeto_mod13/Encomenda">Encomenda</a> | <a href="../projeto_mod13/Utilizador">Utilizador</a>

    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?= $produto->ID_produto ?></td>
        <td><?= $produto->nome ?></td>
        <td><?= $produto->quantidade ?></td>
        <td><?= $produto->preco ?>€</td>
        
    </tr>
    <?php endforeach; ?>
</table>