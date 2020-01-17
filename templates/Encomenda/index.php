<h1>encomenda</h1>
<table>
    <tr>
        <th>id da encomenda</th>
        <th>id do produto</th>
        <th>id do utilizador</th>
        <th>quantidade</th>
        
    </tr>

    <a href="../projeto_mod13/Produtos">Produtos</a> | Encomenda | <a href="../projeto_mod13/Utilizador">Utilizador</a>

    <?php foreach ($encomendas as $encomenda): ?>
    <tr>
        <td><?= $encomenda->ID_encomenda ?></td>
        <td><?= $encomenda->ID_produto ?></td>
        <td><?= $encomenda->ID_utilizador ?></td>
        <td><?= $encomenda->qtd_prod_encomendado ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>