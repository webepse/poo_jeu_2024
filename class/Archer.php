<?php
    class Archer extends Personnage{

        public $arc = 3;

        public function __construct($nom)
        {
            $this->vie = $this->vie / 2;
            parent::__construct($nom);
        }

        public function getMdp(){
            return $this->mdp;
        }

    }

?>