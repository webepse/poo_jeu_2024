<?php
    class Chien{
        public function __construct(
            public $nom, 
            public $race, 
            private $maitre)
        {}

        public function getMaitre(){
            $exemple = rand().$this->maitre;
            echo $exemple;
        }

        public function revenir(){
            echo "<div>".$this->nom." Reviens!</div>";
        }
    }
?>