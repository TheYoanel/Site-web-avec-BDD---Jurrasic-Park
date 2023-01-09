
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

        $reponse = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login =:login");
        $reponse->execute(array(
            'login' => $login,
        )); 

        $connexion = $reponse->fetch();
        
        if(!empty($connexion)){

            $password_hash = $this->verifyHashagePassword($password,$connexion['password']);


            if($password_hash){
                
                $_SESSION['user'] = $connexion;
                $reponse->closeCursor();
                return true;

        }

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


    public function nameUserAlreadyUsed($login){

        $reponse = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login=?");
        $reponse->execute([$login]); 
        $user = $reponse->fetch();
        if ($user) {
            return true;
        } else {
            return false;
        } 
        $reponse->closeCursor();

    }
    

    public function createAccount($login,$password,$email=""){

        $mdp_hash = $this->hashagePassword($password);
       

        $req = $this->bdd->prepare('INSERT INTO utilisateurs(login, password, email) VALUES(:login, :password, :email)');
        $req->execute(array(
        'login' => $login,
        'password' => $mdp_hash,
        'email' => $email
        ));

    

    }

    public function modifAccount($id,$mdp,$pseudo="",$email=""){

    }

    public function deleteAccount($id,$mdp){

    }

    public function changePassword($login,$old_password,$new_password){

        $reponse = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login =:login");
        $reponse->execute(array(
            'login' => $login,
        )); 

        $connexion = $reponse->fetch();
        if(!empty($connexion)){

            $password_hash = $this->verifyHashagePassword($old_password,$connexion['password']);
            if($password_hash){

                $new_password = $this->hashagePassword($new_password);

                $req = $this->bdd->prepare('UPDATE utilisateurs SET password = :password WHERE login = :login');
                $req->execute(array(
                'login' => $login,    
                'password' => $new_password,
                
                ));
                
                $reponse->closeCursor();

        }

    }
}

    public function changePseudo(){

    }

    public function changeMailAdresse(){
        
    }

    public function hashagePassword($password){

        $hash = password_hash($password, PASSWORD_BCRYPT);

        return $hash;

    }

    public function verifyHashagePassword($password,$mdp){

        if (password_verify($password, $mdp)) {
            return true;
    } else {
            return false;
    }

    }

}




?>