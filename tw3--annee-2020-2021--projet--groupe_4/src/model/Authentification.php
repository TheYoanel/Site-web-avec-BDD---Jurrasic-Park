
<?php 

if(!isset($_SESSION)){
    session_start();
}


class Authentification{



    public function __construct(){

                try
        {
            $this->bdd = new PDO("mysql:host=".HOST."; dbname=".BASENAME."",  LOGIN, PASSWORD);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }



        // $reponse = $this->bdd->query('SELECT id,email,mdp FROM utilisateurs');
        
        
        
        // $this->bdd = $bdd;
    }

    public function connectUser($login, $password){

        $reponse = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE id =:id AND mdp=:mdp");
        $reponse->execute(array(
            'id' => $login,
            'mdp' => $password
        )); 

        $connexion = $reponse->fetch();
        if ($connexion) {
            $_SESSION['user'] = $connexion;

            $reponse->closeCursor();
            return true;
        } 
        
        $reponse->closeCursor();
        return false;
            

    }    

    public function isUserConnected(){

        if(!empty($_SESSION)){
            
            return true;
        }
        
        
        return false;

    }

    public function isAdminConnected(){

        if($this->isUserConnected()){

            if($_SESSION['user']['status'] == 'admin'){

                
            }

        }

    }



    public function getUserName(){

        if($this->isUserConnected()){

            return ($_SESSION['user']['name']);
        }



    }

    public function disconnectUser(){

        
        unset($_SESSION['user']);

    }


    public function nameUserAlreadyUsed($id){

        // $reponse = $this->bdd->prepare('SELECT id FROM utilisateurs ');
    
        // while ($donnees = $reponse->fetch())
        // {
        //     if($donnees['id'] == $id){    
        //         return true;
        //     }
        // }
        // $reponse->closeCursor();
        // return false;

        $reponse = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE id=?");
        $reponse->execute([$id]); 
        $user = $reponse->fetch();
        if ($user) {
            return true;
        } else {
            return false;
        } 
        $reponse->closeCursor();

    }

    public function createAccount($id,$mdp,$pseudo="",$email=""){

        $req = $this->bdd->prepare('INSERT INTO utilisateurs(id, mdp, pseudo, email) VALUES(:id, :mdp, :pseudo, :email)');
        $req->execute(array(
        'id' => $id,
        'mdp' => $mdp,
        'pseudo' => $pseudo,
        "email" => $email
        ));

    }

    public function modifAccount($id,$mdp,$pseudo="",$email=""){

    }

    public function deleteAccount($id,$mdp){

    }

}




?>