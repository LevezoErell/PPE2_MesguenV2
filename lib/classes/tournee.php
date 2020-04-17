<?php
class tournee
{
    private $trnNum;
    private $vehImmat;
    private $remMat;
    private $chfId;
    private $trnCommentaire;
    private $trnPecChauffeur;
    private $trnDte;

    // Méthodes getter et setter
    // Accesseurs de trnNum
    public function getTrnNum()
    {
        return $this->trnNum;
    }
    public function setTrnNum($trnNum)
    {
        $this->trnNum = $trnNum;

        return $this;
    }
    // Accesseurs de vehImmat
    public function getVehImmat()
    {
        return $this->vehImmat;
    }
    public function setVehImmat($vehImmat)
    {
        $this->vehImmat = $vehImmat;

        return $this;
    }
    // Accesseurs de remMat 
    public function getRemMat()
    {
        return $this->remMat;
    }
    public function setRemMat($remMat)
    {
        $this->remMat = $remMat;

        return $this;
    }
    // Accesseurs de chfId 
    public function getChfId()
    {
        return $this->chfId;
    }
    public function setChfId($chfId)
    {
        $this->chfId = $chfId;

        return $this;
    }
    // Accesseurs de trnCommentaire
    public function getTrnCommentaire()
    {
        return $this->trnCommentaire;
    }
    public function setTrnCommentaire($trnCommentaire)
    {
        $this->trnCommentaire = $trnCommentaire;

        return $this;
    }
    // Accesseurs de trnPecChauffeur 
    public function getTrnPecChauffeur()
    {
        return $this->trnPecChauffeur;
    }
    public function setTrnPecChauffeur($trnPecChauffeur)
    {
        $this->trnPecChauffeur = $trnPecChauffeur;

        return $this;
    }
    // Accesseurs de TrnDte
    public function getTrnDte()
    {
        return $this->trnDte;
    }
    public function setTrnDte($trnDte)
    {
        $this->trnDte = $trnDte;

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
 * Fonction qui permet d'insérer une tournée et ses paramètres dans la table tournée
 */
public function insert($connexion) {
    $sql = "INSERT INTO tournee(TRNNUM, VEHIMMAT, REMMAT, CHFID, TRNCOMMENTAIRE, TRNPECCHAUFFEUR, TRNDTE)
    VALUES ('".$this->getTrnNum()."','".this->getVehImmat()."','".this->getRemMat()."','".this->getChfId()."','".this->getTrnCommentaire()."','".this->getTrnPecChauffeur()."','".this->getTrnDte()."')";

$requete = $connexion->prepare($sql);
$result = $requete->execute();

return $result;
}
}