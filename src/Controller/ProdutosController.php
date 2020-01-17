<?php
	namespace App\Controller;

	class ProdutosController extends AppController
	{
		public function initialize(): void
	    {
	        parent::initialize();

	        $this->loadComponent('Flash'); // Include the FlashComponent
	    }

		public function index()
	    {
	        $produtos = $this->Produtos->find('all');
	        $this->set(compact('produtos'));
	    }

	    public function add()
	    {
	        $produtos = $this->Produtos->newEmptyEntity();
	        if ($this->request->is('post')) {
	            $produtos = $this->Produtos->patchEntity($produtos, $this->request->getData());
	            if ($this->Produtos->save($produtos)) {
	                $this->Flash->success(__('O seu produto foi adicionado.'));
	                return $this->redirect(['action' => 'index']);
	            }
	            $this->Flash->error(__('Não é possível adicionar o produto.'));
	        }
	        $this->set('produtos', $produtos);
	    }
	}
	
?>