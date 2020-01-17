<?php
	namespace App\Controller;

	class UtilizadorController extends AppController
	{
		public function initialize(): void
	    {
	        parent::initialize();

	        $this->loadComponent('Flash'); // Include the FlashComponent
	    }

		public function index()
	    {
	        $utilizadores = $this->Utilizador->find('all');
	        $this->set(compact('utilizadores'));
	    }

	    public function add()
	    {
	        $utilizadores = $this->Utilizador->newEmptyEntity();
	        if ($this->request->is('post')) {
	            $utilizadores = $this->Utilizador->patchEntity($utilizadores, $this->request->getData());
	            if ($this->Utilizador->save($utilizadores)) {
	                $this->Flash->success(__('novo utilizador adicionado adicionado.'));
	                return $this->redirect(['action' => 'index']);
	            }
	            $this->Flash->error(__('Não é possível adicionar utilizador.'));
	        }
	        $this->set('utilizadores', $utilizadores);
	    }
	}
?>