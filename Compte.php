
<?php

class Compte
{
            
                //
                private static $nbComptes=0;
                private $numero;
                private $nom;
                private $solde;

        //code construct compte.php

                public function Init($p_numero,$p_nom)
                {
                    $this->numero=$p_numero;
                    $this->nom=$p_nom;
                    $this->solde=0;
                    self::$nbComptes++;
                }

                public function __construct($p_numero,$p_nom)
                {
                    $this->numero=$p_numero;
                    $this->nom=$p_nom;
                    $this->solde=0;
                    self::$nbComptes++;
                }
                
                public static function GetNbComptes()
                {
                    return self::$nbComptes;
                }
                public function Crediter($p_montant)
                {
                    $this->solde+=$p_montant;
                }
                public function Debiter($p_montant)
                {
                    $this->solde-=$p_montant;
                }
                public function GetSolde()
                {
                    return $this->solde;
                }
                public function GetNom()
                {
                    return $this->nom;
                }
                public function SetNom($p_nom)
                {
                    $this->nom=$p_nom;
                }
                public function EstSuperieur(Compte $p_cpte)
                {
                    if ($this->solde > $p_cpte->GetSolde())
                    {
                    return true;
                    }
                    else
                    {
                    return false;
                    }
                }             
            }
?>