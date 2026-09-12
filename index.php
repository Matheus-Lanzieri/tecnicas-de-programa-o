<?php
    require "usuario.php";

    /*$aluno = new usuario();
    $aluno->nome = "Matheus";
    $aluno->idade = 26;
    $aluno -> email = "matheus@ig.com.br";

    $aluno2 = new usuario();
    $aluno2->nome = "Joaquim";
    $aluno2->idade = 30;
    $aluno2 -> email = "joaquim@icg.com.br";

    var_dump($aluno);
    echo "<br>";
    var_dump($aluno2);*/

    $aluno = new usuario();
    $aluno->setNome("Matheus");
    $aluno->setIdade (26);
    $aluno -> setEmail ("matheus@ig.com.br");

    $aluno2 = new usuario();
    $aluno2->setNome ("Joaquim");
    $aluno2->setIdade  (30);
    $aluno2 ->setEmail  ("joaquim@icg.com.br");
    
    $aluno3 = new usuario();
    $aluno3->setNome ("Epaminondas");
    $aluno3->setIdade  (17);
    $aluno3 ->setEmail  ("epaminandas#gfg.com.br");

    

    echo "<p>Nome: ".$aluno->getNome()."</p>";
    echo "<p>Idade: ".$aluno->getIdade()."</p>";   
    echo "<p>Email: ".$aluno->getEmail()."</p>";
    echo  "<br>";
    echo "<p>Nome: ".$aluno2->getNome()."</p>";
    echo "<p>Idade: ".$aluno2->getIdade()."</p>";   
    echo "<p>Email: ".$aluno2->getEmail()."</p>";
    echo  "<br>";
    echo "<p>Nome: ".$aluno3->getNome()."</p>";
    echo "<p>Idade: ".$aluno3->getIdade()."</p>";   
    echo "<p>Email: ".$aluno3->getEmail()."</p>";
    echo  "<br>";
    
    $aluno4 = new usuario("alice", 22);
    echo "<br>";
    var_dump($aluno4);


?>
