<?php
    class User{
        public $idUser=null;
        public $nom=null;
        public $prenom=null;
        public $login=null;
        public $motDePasse=null;
        public $role=null;
        public $existe=false;

        function __construct($login, $bdd){
            $query=$bdd->prepare('SELECT * FROM user WHERE `login`=?');
            $query->execute(array($login));
            if($res=$query->fetch()){
                $this->idUser=$res['idUser'];
                $this->nom=$res['nom'];
                $this->prenom=$res['prenom'];
                $this->login=$res['login'];
                $this->motDePasse=$res['motDePasse'];
                $this->role=$res['role'];
                $this->existe=true;
            }
        }
    }
?>