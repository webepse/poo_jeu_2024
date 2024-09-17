<?php
    require "Personnage.php";
    $aragorn = new Personnage("Aragorn");
    $gimli = new Personnage("Gimli");

    $aragorn->crier();
    $aragorn->mort();
    $gimli->crier("Pour les nains!");
    $gimli->mort();
    echo "<div>Vie Aragorn:".$aragorn->vie."</div>";
    
    $gimli->attaque($aragorn);
    
    echo "<div>Vie Aragorn après atk:".$aragorn->vie."</div>";
    

    $gandalf = new Personnage("Gandalf");

    $gandalf->crier("Vous ne passerez pas!");
    $gandalf->attaque($aragorn);

    echo "<div>Vie Aragorn après atk:".$aragorn->vie."</div>";
    $aragorn->regenerer();
    echo "<div>Vie Aragorn après regen:".$aragorn->vie."</div>";
    // echo $aragorn->withZero(7);
    
    echo Personnage::withZero(8);
    echo "<h1>info vie Gandalf</h1>";
    echo $gandalf->infoVie();
?>