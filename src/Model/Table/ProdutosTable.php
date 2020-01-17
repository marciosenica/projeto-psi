<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProdutosTable extends Table
{
    public function initialize(array $config):void
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator):validator
    {
        $validator
            ->notEmpty('ID_adm')
            ->requirePresence('ID_adm')
            ->notEmpty('ID_categoria')
            ->requirePresence('ID_categoria')
            ->notEmpty('nome')
            ->requirePresence('nome')
            ->notEmpty('quantidade')
            ->requirePresence('quantidade')
            ->notEmpty('preco')
            ->requirePresence('preco');

        return $validator;
    }
}
?>