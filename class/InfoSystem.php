<?php
    class InfoSystem{
        public $idInfoSystem=null;
        public $email=null;
        public $tel=null;
        public $instagram=null;
        public $facebook=null;
        public $snapchat=null;
        public $whatsapp=null;
        public $lieu=null;
        public $existe=false;

        function __construct($bdd){
            $query=$bdd->query('SELECT * FROM infoSystem ORDER BY idInfoSystem DESC');
            if($res=$query->fetch()){
                $this->idInfoSystem=$res['idInfoSystem'];
                $this->email=$res['email'];
                $this->tel=$res['tel'];
                $this->instagram=$res['instagram'];
                $this->facebook=$res['facebook'];
                $this->snapchat=$res['snapchat'];
                $this->whatsapp=$res['whatsapp'];
                $this->lieu=$res['lieu'];
                $this->existe=true;
            }
        }
    }
?>