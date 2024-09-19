<?php
    class Personnage{
        const MAX_VIE = 120;
        public int $vie = 80;
        public int $atk = 30;
        public string $name;
        protected string $mdp = "password";
        
        /**
         * Constructeur de l'objet Personnage
         *
         * @param string $nom
         */
        public function __construct(string $nom)
        {
            $this->name = $nom;
            // $this->vie = 80;
            // $this->atk = 30;
        }

        /**
         * Permet de dire un message
         *
         * @param string $message
         * @return void
         */
        public function crier(string $message="Leeroy Jenkins!!!!"){
            echo "<div>".$message."</div>";  
        }

        /**
         * Permet d'attaquer un autre personnage
         *
         * @param Personnage $cible
         * @return void
         */
        public function attaque(Personnage $cible)
        {
            $cible->vie -= $this->atk;
            $cible->pasNegatif();
        }

        public function regenerer(int $vie = null){
            if(is_null($vie))
            {
                $this->vie = self::MAX_VIE;
            }else{
                $this->vie +=$vie;
            }
        }

        private function pasNegatif(){
            if($this->vie < 0)
            {
                $this->vie = 0;
            }
        }
        
        public function mort(){
            if($this->vie <= 0)
            {
                return True;
            }else{
                return False;
            }
        }

        public function infoVie()
        {
            return self::withZero($this->vie);
        }

        public static function withZero($chiffre){
            if($chiffre < 10){
                return '0'.$chiffre;
            }
            else{
                return $chiffre;
            }
        }   
    
    }
?>