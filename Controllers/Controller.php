<?php
    
    class Controller{
        public function login() {
            if(isset ($_POST['submit'])){
                
                $loginManager = new Model(); 
                $mail = $_POST['mail'];
                $mdp = $_POST['mdp'];
                 
                $user = $loginManager->getUser($mail, $mdp);
                if(!empty($mail) AND !empty($mdp)){
                   
                    if($user AND $user['isvalid']){
                        
                        header('Location: index.php');
                    }else
                    { 
                        throw new Exception("Le nom ou le mot de passe est incorect");
                        header('Location: index.php');
                       

                    }

                }else{
                    throw new Exception("les champs sont vides");
                }
                 
            }
            header('Location: index.php'); 
        }

        public function connect(){
            require (VIEW.'inscription.php');
        }
        
        public function createUser(){
            $model = new Model();
            
            if(isset ($_POST['submit'])){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mail = $_POST['mail'];
                $mail2 = $_POST['mail2'];
                $mdp = $_POST['mdp'];
                $dateNaiss = $_POST['dateNaiss'];
                
                $sexe = $_POST['sexe'];
                if ($_POST['sexe']='non') $sexe= 'homme';
                if($_POST['sexe']='non') $sexe= 'femme';
                
                $createUser = $model->insertUser($prenom, $nom, $mail, $mail2, $mdp, $dateNaiss, $sexe);
                    
                header('Location: index.php');      
                
            }
           
            
        }
    } 

