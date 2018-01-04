<?php
	include('C:\wamp64\www\Gaspillage\model\modele.php');
	class Controleur{
		private $unModele;

		public function __construct($serveur,$bdd,$user,$mdp){
			$this->unModele = new Modele($serveur,$bdd,$user,$mdp);
		}
		public function setTable($uneTable){
			$this->unModele->setTable($uneTable);
		}
		public function selectAll(){
			return $this->unModele->selectAll(); //controle et traitement des données
		}
		public function insert($tab){
			//vous pouvez faire des controles sur les données
			$this ->unModele->insert($tab);
		}

		public function suppression($tab){
			//vous pouvez faire des controles sur les données
			$this ->unModele->delete($tab);
		}

		public function update($tab, $clause)
		{
			# code...
			$this->unModele->update($tab,$clause);

		}

		public function selectWhere($tab)
		{
			return $this->unModele->selectWhere($tab);
		}
	}
?>