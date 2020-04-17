<?php
class etape
{
    // Déclaration des variables de la table "étape"
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

    // Déclaration du constructeur 
    public function __construct($donnees)
    {
        $this->setTrnNum($donnees['trnNum']);
        $this->setEtpId($donnees['etpId']);
        $this->setLieuId($donnees['lieuId']);
        $this->setEtpHreMin($donnees['etpHreMin']);
        $this->setEtpHreMax($donnees['etpHreMax']);
        $this->setEtpHreDebut($donnees['etpHreDebut']);
        $this->setEtpHreFin($donnees['etpHreFin']);
        $this->setEtpNbPalLiv($donnees['etpNbPalLiv']);
        $this->setEtpNbPalLivEur($donnees['etpNbPalLivEur']);
        $this->setEtpNbPalCharg($donnees['etpNbPalCharg']);
        $this->setEtpNbPalChargEur($donnees['etpNbPalChargEur']);
        $this->setEtpCheque($donnees['etpCheque']);
        $this->setEtpEtatLiv($donnees['etpEtatLiv']);
        $this->setEtpCommentaire($donnees['etpCommentaire']);
        $this->setEtpVal($donnees['etpVal']);
        $this->setEtpKm($donnees['etpKm']);
    }

        
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
}