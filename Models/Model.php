<?php
    class Model{ 
        function insertUser($prenom, $nom, $mail, $mail2, $mdp, $dateNaiss, $sexe) {
            $db = $this->dbConnect();
            $mdp_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            
            $req = $db->prepare('INSERT INTO user (prenom, nom, mail, mail2, mdp, dateNaiss, sexe) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $req->execute(array($prenom, $nom, $mail, $mail2, $mdp_hache, $dateNaiss, $sexe));
            $result = $req->fetch();
            return $ajout;

        }

        function getUser($mail, $mdp) {
            $db = $this->dbConnect();

            $req = $db->prepare('SELECT * from user WHERE mail = ?');
            $req->execute(array($mail));
            $result = $req->fetch();
            $isvalid = password_verify($mdp, $result['mdp']);
            return [
                'result' => $result,
                'isvalid' => $isvalid
            ];
        }

        function dbConnect() {
            try{
                 $db = new PDO('mysql:host=localhost;dbname=connexioinscriptiontest;charset=utf8', 'root', '');
                return $db;
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
           
        }

    }

        