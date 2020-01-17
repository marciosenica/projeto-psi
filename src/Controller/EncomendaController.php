<?php
	namespace App\Controller;

	class EncomendaController extends AppController
	{
		public function index()
	    {
	        $encomendas = $this->Encomenda->find('all');
	        $this->set(compact('encomendas'));
	    }
	}
?>