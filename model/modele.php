<?php
	class Modele{
		// Etat
		private $pdo, $table;
		//Constructeur
		public function __construct($serveur, $bdd, $user, $mdp){
			$this->pdo = null; //quand tu met this, tu parle du l'attribut private
			try{
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
			}
			catch(Exception $exp){
				echo "Erreur de connexion au ".$serveur."/".$bdd;
			}
		}
		//Methode
		public function selectAll(){
			if($this->pdo != null){
				$requete ="select * from ".$this->table;//créé la requete n'poublie pas l'espace pd
				$select = $this->pdo->prepare($requete);//prepare la requete si parametre
				$select->execute();//execute la requete
				$resultats = $select->fetchAll();//on recupere les enregistrements
				return $resultats;//retourne le resultat
			} else {
				return null;
			}
		}
		//Getters and Setters
		public function setTable($uneTable){
			$this->table = $uneTable;
		}

		public function insert($tab){
			$donnees = array();
			$champs = array();
			foreach ($tab as $cle => $valeur){
				$champs[] = ":".$cle;
				$donnees[":".$cle] = $valeur;
			}
			$chaine = implode(",",$champs);
			$requete = "insert into ".$this->table." values (null,".$chaine.");";
			if($this->pdo != null){
				$insert = $this->pdo->prepare($requete);//prepare la requete si parametre
				$insert->execute($donnees);//execute la requete
			} else {
				return null;
			}
		}


		public function delete($tab)
		{

			$donnees= array();
			$champs = array();

			foreach ($tab as $cle => $valeur) {
				$donnees[":".$cle] = $valeur;
				$champs[] = $cle." = :".$cle;
			}

			$chaineclause = implode(" and ", $champs);

			$requete = "DELETE FROM ".$this->table." WHERE ".$chaineclause.";";

			if($this->pdo != null){

				$delete = $this->pdo->prepare($requete);//prepare la requete si parametre
				$delete->execute($donnees);//execute la requete

			} else {

				return null;
			}
			
		}

		public function update($tab, $where)
		{

			$donnees= array();
			$champs = array();
			$clause = array();


			foreach ($tab as $cle => $valeur) {
				$donnees[":".$cle] = $valeur;
				$champs[] = $cle." = :".$cle;
			}

			$chaineChamps = implode(" , ", $champs);

			foreach ($where as $cle => $valeur) {
				$donnees[":".$cle] = $valeur;
				$champs[] = $cle." = :".$cle;
			}

			$chaineclause = implode(" and ", $clause);

			$requete = "update ".$this->table." set ".$chaineChamps." where ".$chaineclause.";";

			if($this->pdo != null){

				$update = $this->pdo->prepare($requete);//prepare la requete si parametre
				$update->execute($donnees);//execute la requete

			} else {

				return null;
			}
		}

		public function selectwhere($tab)

		        {

		            $donnees = array();

		            $clause = array();

		            foreach($tab as $cle =>$valeur)

		            {

		                $donnees[":".$cle] = $valeur;

		                $clause[] = $cle." = :".$cle;

		            }

		            $chaineclause = implode(" and ", $clause);

		            $requete = "select * from ".$this->table." where ".$chaineclause.";";

		            echo $requete;

		            if($this->pdo != null)

		            {

		                $selectWhere = $this->pdo->prepare($requete);

		                $selectWhere->execute($donnees);

		                $resultats = $selectWhere->fetch();
		                return $resultats;

		            }

		            else

		            {

		                return null;

		            }

		        }


		function connexionBdd()
		{
			$pdo = null;

			try
			{
				$pdo = new PDO("mysql:host=localhost; dbname=gaspillage","root","");

			}

			catch(Exception $exp)
			{
				echo "Erreur de connexion à la bdd";
			}

			return $pdo;
		}


		function registerAsso()
		{
			$pdo = connexionBdd();
			if ($pdo == null) 
			{
				return null;
			}

			else
			{
				$requete = "insert into association values (null, :assoName, :assoNumber, :email, :phone, null,null)";

				$donnees= array(
					":assoName" =>$tab['nomAsso'],
					":assoNumber" =>$tab['siretAsso'],
					":email" =>$tab['email'],
					":phone" =>$tab['telephone'], 
					);


				
			}

			$insert = $pdo -> prepare($requete);
			$insert -> execute($donnees);
		}

		

		function select($table)
		{
			$pdo = connexionBdd();

			if ($pdo = null) {
				return null;
			}

			else
			{
				$requete = "select * from ".$table.";";
				$select = $pdo -> prepare($requete);
				$select -> execute();

				$resultat = $select -> fetchall();
				return $resultat;
			}
		}

		/**public function connexionUser($login,$mdp)
		
		{
	            $requete = "select idContact from ".$this->table." where identifiant =:".$login." AND password = :".$mdp;
	            echo $requete;

	     
	   	        $connexionUser = $this->pdo->prepare($requete);
	                $connexionUser->execute($donnees);
	                $resultats = $connexionUser->fetch();
	                return $resultats;
		            
	            
		            
	            else
	            {

	                return null;

	            }		


		}
		**/



	}
?>