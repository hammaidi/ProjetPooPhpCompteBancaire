<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
 <title>Php orienté objet</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta http-equiv="Content-Language" content="fr" />
</head>
<body>
<?php
    include_once "CompteEpargne.php";
    function afficher(Compte $unCompte)
    {
     echo $unCompte->GetSolde()."<br/ >";
    }
    $c1=new Compte(1, "dupont");

    $c1->Crediter(1000);
    $c1->Debiter(400);
    echo $c1->GetSolde()."<br/ >";
    $c2=new Compte(1, "dupont");
    //$c2->Init(2,"durand");
    $c2->Crediter(1000);
    $c2->Debiter(300);
    if ($c1->EstSuperieur($c2))
    {
    echo "c1 > c2"."<br/ >";
    }
    else
    {
    echo "c1 < c2"."<br/ >";
    }
    $c2->SetNom("toto");
    echo $c2->GetNom()."<br/ >";

    //
    
    echo "Il y a ".Compte::GetNbComptes()." comptes créés"."<br/ >";
    $ce1=new CompteEpargne(3,"Riche",10);// Compte épargne avec 10% d'intérêts
    $ce1->Crediter(1000);
     

    $mesComptes=array();
    $mesComptes[0]=$c1;
    $mesComptes[1]=$c2;
    $mesComptes[2]=$ce1;
    foreach ($mesComptes as $unCompte)
    {
        afficher($unCompte);
        // echo $unCompte;
    }
?>
</body>
</html>
