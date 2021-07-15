<?php
    
    class Routeur{
        private $controller;

        public function route() {
            $this->controller = new Controller;

            (isset($_GET['action'])) ? $action = $_GET['action'] : $action = "connect";
            
            try {
                switch($action) {
                    case 'connect':
                        $this->controller->connect();
                        break;
                    case 'connexion':
                        $this->controller->login();
                        break;
                    case 'createUser':
                        $this->controller->createUser();
                        break;
                }
            } 
            catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }
    }