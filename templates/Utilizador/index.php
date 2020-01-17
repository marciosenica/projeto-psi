<h1>utilizador</h1>
<table>
    <tr>
        <th>ID_utilizador</th>
        <th>username</th>
        <th>nome</th>
        <th>idade</th>
        <th>telefone</th>
        <th>morada</th>
        
    </tr>
    <?= $this->Html->link('novo utilizador', ['action' => 'add']) ?>
    <br>
    <a href="../projeto_mod13/Produtos">Produtos</a> | <a href="../projeto_mod13/Encomenda">Encomenda</a> | Utilizador

    <?php foreach ($utilizadores as $utilizador): ?>
    <tr>
        <td><?= $utilizador->ID_utilizador ?></td>
        <td><?= $utilizador->username ?></td>
        <td><?= $utilizador->nome ?></td>
        <td><?= $utilizador->idade ?></td>
        <td><?= $utilizador->telefone ?></td>
        <td><?= $utilizador->morada ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
