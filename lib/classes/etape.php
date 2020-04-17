<?php
class etape
{
    private $trnNum;
    private $etpId;
    private $lieuId;
    private $etpHreMin;
    private $etpHreMax;
    private $etpHreDebut;
    private $etpHreFin;
    private $etpNbPalLiv;
    private $etpNbPalLivEur;
    private $etpNbPalCharg;
    private $etpPalChargEur;
    private $etpCheque;
    private $etpEtatLiv;
    private $etpCommentaire;
    private $etpVal;
    private $etpKm;

        
    // Méthodes getter et setter
    // Accesseurs de TrnNum
    public function getTrnNum()
    {
        return $this->trnNum;
    }
    public function setTrnNum($trnNum)
    {
        $this->trnNum = $trnNum;

        return $this;
    }
    // Accesseurs de EtpId
    public function getEtpId()
    {
        return $this->etpId;
    } 
    public function setEtpId($etpId)
    {
        $this->etpId = $etpId;

        return $this;
    }
    // Accesseurs de LieuId
    public function getLieuId()
    {
        return $this->lieuId;
    }
    public function setLieuId($lieuId)
    {
        $this->lieuId = $lieuId;

        return $this;
    }

    // Accesseurs de EtpHreMin 
    public function getEtpHreMin()
    {
        return $this->etpHreMin;
    } 
    public function setEtpHreMin($etpHreMin)
    {
        $this->etpHreMin = $etpHreMin;

        return $this;
    }
    // Accesseurs de EtpHreMax
    public function getEtpHreMax()
    {
        return $this->etpHreMax;
    }
    public function setEtpHreMax($etpHreMax)
    {
        $this->etpHreMax = $etpHreMax;

        return $this;
    }
    // Accesseurs de EtpHreDebut 
    public function getEtpHreDebut()
    {
        return $this->etpHreDebut;
    }
    public function setEtpHreDebut($etpHreDebut)
    {
        $this->etpHreDebut = $etpHreDebut;

        return $this;
    }
    // Accesseurs de EtpHreFin 
    public function getEtpHreFin()
    {
        return $this->etpHreFin;
    }
    public function setEtpHreFin($etpHreFin)
    {
        $this->etpHreFin = $etpHreFin;

        return $this;
    }
    // Accesseurs de EtpNbPalLiv
    public function getEtpNbPalLiv()
    {
        return $this->etpNbPalLiv;
    } 
    public function setEtpNbPalLiv($etpNbPalLiv)
    {
        $this->etpNbPalLiv = $etpNbPalLiv;

        return $this;
    }
    // Accesseurs de EtpNbPalLivEur 
    public function getEtpNbPalLivEur()
    {
        return $this->etpNbPalLivEur;
    } 
    public function setEtpNbPalLivEur($etpNbPalLivEur)
    {
        $this->etpNbPalLivEur = $etpNbPalLivEur;

        return $this;
    }
    // Accesseurs de EtpNbPalCharg
    public function getEtpNbPalCharg()
    {
        return $this->etpNbPalCharg;
    }
    public function setEtpNbPalCharg($etpNbPalCharg)
    {
        $this->etpNbPalCharg = $etpNbPalCharg;

        return $this;
    }
    // Accesseurs de EtpCheque 
    public function getEtpCheque()
    {
        return $this->etpCheque;
    } 
    public function setEtpCheque($etpCheque)
    {
        $this->etpCheque = $etpCheque;

        return $this;
    }
    // Accesseurs de EtpEtatLiv 
    public function getEtpEtatLiv()
    {
        return $this->etpEtatLiv;
    }
    public function setEtpEtatLiv($etpEtatLiv)
    {
        $this->etpEtatLiv = $etpEtatLiv;

        return $this;
    }
    // Accesseurs de EtpCommentaire
    public function getEtpCommentaire()
    {
        return $this->etpCommentaire;
    }
    public function setEtpCommentaire($etpCommentaire)
    {
        $this->etpCommentaire = $etpCommentaire;

        return $this;
    }
    // Accessaurs de EtpVal
    public function getEtpVal()
    {
        return $this->etpVal;
    }
    public function setEtpVal($etpVal)
    {
        $this->etpVal = $etpVal;

        return $this;
    }
    // Accesseurs de EtpKm
    public function getEtpKm()
    {
        return $this->etpKm;
    } 
    public function setEtpKm($etpKm)
    {
        $this->etpKm = $etpKm;

        return $this;
    }
/**
 * Fonction Hydrate prend en paramètre un tableau
 * Elle permet de vérifier pour chaque élément s'il y a un setteur existant
 * S'il existe, il l'exécute pour remplir l'objet
 */
public function hydrate(array $donnees) {
    foreach ($donnees as $key => $value) {
        $method = 'set'.ucfirst($key);

        if(method_exists($this, $method)) {
            $this->$method($value);
        }
    }
}

/**
 * Fonction qui permet d'insérer une étape et ses paramètres, dans ta table étape
 */
public function insert($connexion) {
    $sql = "SELECT MAX(ETPID) FROM ETAPE
                              WHERE TRNNUM = '".$this->getTrnNum()."'";
    
    $result = $connexion->query($sql);

    foreach ($result as $row) {
        if (!isset($row[0])) {
            $id = 1;
        }
        else {
            $id = $row[0]+1;
        }
    }

    $this->setEtpId($id);
    $sql = "INSERT INTO ETAPE (TRNNUM,ETPID,LIEUID,ETPHREDEBUT,ETPHREFIN,ETPCOMMENTAIRE)
            VALUES ('".$this->getTrnNum()."','".$this->getEtpId()."','".$this->getLieuId()."','".$this->getEtpHreDebut()."','".$this->getEtpHreFin()."','".$this->getEtpCommentaire()."')";

    $requete = $connexion->prepare($sql);
    $result = $requete->execute();

    return $result;
}

/**
 * Fonction qui permet de mettre à jour la table étape si on fait des modifications d'une étape
 */
public function update($connexion) {
    $sql = "UPDATE ETAPE SET LIEUID = '".$this->getLieuId()."',
                             ETPHREDEBUT = '".$this->getEtpHreDebut()."',
                             ETPHREFIN = '".$this->getEtpHreFin()."',
                             ETPCOMMENTAIRE = '".$this->getEtpCommentaire()."'
                             WHERE TRNNUM = '".$this->getTrnNum()."'
                             AND ETPID = '".$this->getEtpId()."'";

    $requete = $connexion->prepare($sql);
    $result = $requete->execute();

    return $result;
}
/**
 * Fonction qui permet de supprimer une étape
 */
public function delete($connexion) {
    $sql = "DELETE FROM ETAPE WHERE TRNNUM = '".$this->getTrnNum()."' 
                              AND ETPID = '".$this->getEtpId()."'";

    $requete = $connexion->prepare($sql);
    $result = $requete->execute();

    return $result;
}
}