<?php

/**
 * Class to handle all db operations
 * This class will have CRUD methods for database tables
 *
 * @author Foungnigué Yves SORO
 */
class DbHandler {

    private $conn;

    function __construct() {
        require_once dirname(__FILE__) . '/DbConnect.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }

    /* ------------- Creation methods ------------------ */

    /**
     * Creating new user
     * @param String $id User ID
     * @param String $lastname User lastname
     * @param String $firstname User firstname
     * @param String $pseudo User phone
     * @param String $password User login password
     */
    public function createAdmin($id, $nom, $prenom, $pseudo, $password) {
        $response = array();

        // First check if user already existed in db
        if (!$this->isAdminExists($pseudo)) {

            // insert query
            $stmt = $this->conn->prepare("INSERT INTO administrateur(idAdministrateur,nom,prenom,pseudo, mot_de_passe) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $id, $nom, $prenom, $pseudo, $password);

            $result = $stmt->execute();

            $stmt->close();

            // Check for successful insertion
            if ($result) {
                // User successfully inserted
                return SUCCESS;
            } else {
                // Failed to create user
                return FAILED;
            }
        } else {
            // User with same email already existed in the db
            return EXISTED;
        }

        return $response;
    }

    /**
     * Creating new user
     * @param String $id User ID
     * @param String $lastname User lastname
     * @param String $firstname User firstname
     * @param String $pseudo User phone
     * @param String $password User login password
     */
    public function createUser($id, $nom, $prenom, $phone, $email, $password) {
        $response = array();

        // First check if user already existed in db
        if (!$this->isUserExists($email)) {

            // insert query
            $stmt = $this->conn->prepare("INSERT INTO utilisateur(idutilisateur,nom,prenom,phone,email, mot_de_passe) values(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssss", $id, $nom, $prenom, $phone, $email, $password);

            $result = $stmt->execute();

            $stmt->close();

            // Check for successful insertion
            if ($result) {
                // User successfully inserted
                return SUCCESS;
            } else {
                // Failed to create user
                return FAILED;
            }
        } else {
            // User with same email already existed in the db
            return EXISTED;
        }

        return $response;
    }

    /**
     * Creating new user
     * @param String $id User ID
     * @param String $lastname User lastname
     * @param String $firstname User firstname
     * @param String $pseudo User phone
     * @param String $password User login password
     */
    public function createAnnonceur($id, $nom, $prenom,$email, $password) {
        $response = array();

        // First check if user already existed in db
        if (!$this->isAnnonceurExists($email)) {

            // insert query
            $stmt = $this->conn->prepare("INSERT INTO annonceur(idannonceur,nom,prenom,email, mot_de_passe,statut) values(?, ?, ?, ?, ?,1)");
            $stmt->bind_param("issss", $id, $nom, $prenom, $email, $password);

            $result = $stmt->execute();

            $stmt->close();

            // Check for successful insertion
            if ($result) {
                // User successfully inserted
                return SUCCESS;
            } else {
                // Failed to create user
                return FAILED;
            }
        } else {
            // User with same email already existed in the db
            return EXISTED;
        }

        return $response;
    }

    public function createMarque($id, $libelle, $photo, $idadmin) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO marque (idmarque,libelle,photo,idAdministrateur) values(?, ?, ?, ?)");
        $stmt->bind_param("issi", $id, $libelle, $photo, $idadmin);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createCategorie($id, $libelle, $photo, $idadmin) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO categorie (idcategorie,libelle,photo,idAdministrateur) values(?, ?, ?, ?)");
        $stmt->bind_param("issi", $id, $libelle, $photo, $idadmin);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createEtat($id, $libelle, $idadmin) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO etatProduit (idetatProduit,libelle,idAdministrateur) values(?, ?, ?)");
        $stmt->bind_param("isi", $id, $libelle, $idadmin);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createFabricant($id, $libelle, $idadmin) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO fabricant (idfabricant,libelle,idAdministrateur) values(?, ?, ?)");
        $stmt->bind_param("isi", $id, $libelle, $idadmin);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createPaiement($id, $libelle) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO moyenPaiement (idmoyenPaiement,libelle) values(?, ?)");
        $stmt->bind_param("is", $id, $libelle);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createCarburant($id, $libelle, $idadmin) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO carburant (idcarburant,libelle,idAdministrateur) values(?, ?, ?)");
        $stmt->bind_param("isi", $id, $libelle, $idadmin);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createTypeProduit($id, $libelle, $idadmin, $idcategorie) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO typeProduit (idtypeProduit,libelle,idAdministrateur,idcategorie) values(?, ?, ?, ?)");
        $stmt->bind_param("isii", $id, $libelle, $idadmin,$idcategorie);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createModele($id, $libelle,$fileName, $annee, $idadmin, $idmarque) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO modele (idmodele,libelle,photo,annee,idAdministrateur,idmarque) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssii", $id, $libelle,$fileName, $annee, $idadmin, $idmarque);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createVersion($id, $libelle,$portes, $couleur, $idadmin, $idmodele, $idcarburant) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO version (idversion,libelle,nbre_porte,couleur,idAdministrateur,idmodele,idcarburant) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isisiii", $id, $libelle,$portes, $couleur, $idadmin, $idmodele, $idcarburant);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function createProduct($id, $designation,$description,$reference,$prix,$poids,$fileName, $commentaire, $idtypeProduit, $idmodele,$idcarburant,$idetatProduit,$idmarque,$idfabricant,$idannonceur,$idversion) {
        $response = array();

        // insert query
        $stmt = $this->conn->prepare("INSERT INTO produit (idproduit,designation,description,reference,prix,poids,photo,commentaire,idtypeProduit,idmodele,idcarburant,idetatProduit,idmarque,idfabricant,idannonceur,idversion) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssisssiiiiiiii", $id, $designation,$description,$reference,$prix,$poids,$fileName, $commentaire, $idtypeProduit, $idmodele,$idcarburant,$idetatProduit,$idmarque,$idfabricant,$idannonceur,$idversion);

        $result = $stmt->execute();

        $stmt->close();

        // Check for successful insertion
        if ($result) {
            // User successfully inserted
            return SUCCESS;
        } else {
            // Failed to create user
            return FAILED;
        }

        return $response;
    }

    public function addCar($id,$immatriculation,$vin,$idversion, $idmodele,$idcarburant,$idmarque,$iduser) {
        $response = array();

        if (!$this->isCarExists($immatriculation)) {
            // insert query
            $stmt = $this->conn->prepare("INSERT INTO vehicule (idvehicule,immatriculation,vin,idversion,idmodele,idcarburant,idmarque,idutilisateur) values(?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issiiiii", $id,$immatriculation,$vin,$idversion, $idmodele,$idcarburant,$idmarque,$iduser);

            $result = $stmt->execute();

            $stmt->close();

            // Check for successful insertion
            if ($result) {
                // User successfully inserted
                return SUCCESS;
            } else {
                // Failed to create user
                return FAILED;
            }
        } else {
            // User with same email already existed in the db
            return EXISTED;
        }

        return $response;
    }

    /* ------------- End creation methods ------------------ */

    /* ------------- Lists methods ------------------- */

    /**
     * Fetching all users
     */

    public function getAllAdmins() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM administrateur order by nom");
    }

    public function getAllAnnonceurs() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM annonceur order by nom");
    }

    public function getAllMarques() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM marque where statut=1 order by libelle");
    }

    public function getLatestMarques() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM marque where statut=1 order by libelle limit 2");
    }

    public function getAllCategories() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM categorie where statut=1 order by libelle");
    }

    public function getAllEtats() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM etatProduit order by libelle");
    }

    public function getAllFabricants() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM fabricant order by libelle");
    }

    public function getAllPaiements() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM moyenPaiement order by libelle");
    }

    public function getAllCarburants() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT * FROM carburant order by libelle");
    }

    public function getAllTypeProduits() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT typeProduit.idtypeProduit, typeProduit.libelle as typeProduit, categorie.libelle as categorie FROM typeProduit, categorie where typeProduit.idcategorie=categorie.idcategorie order by typeProduit.libelle");
    }

    public function getAllModeles() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT modele.idmodele, modele.libelle, marque.libelle as marque, modele.annee, modele.photo FROM modele, marque where modele.idmarque=marque.idmarque order by modele.libelle");
    }

    public function getAllModelesByMarque($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT modele.idmodele, modele.libelle, marque.libelle as marque, modele.annee, modele.photo FROM modele, marque where modele.idmarque=marque.idmarque and modele.idmarque='$id' order by modele.libelle");
    }

    public function getAllVersions() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT v.idversion, v.libelle, m.libelle as modele, c.libelle as carburant, v.nbre_porte, v.couleur FROM version v, modele m, carburant c where v.idcarburant=c.idcarburant and v.idmodele=m.idmodele order by v.libelle");
    }

    public function getAllVersionsByModele($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT v.idversion, v.libelle, m.libelle as modele, c.libelle as carburant, v.nbre_porte, v.couleur FROM version v, modele m, carburant c where v.idcarburant=c.idcarburant and v.idmodele=m.idmodele and v.idmodele='$id' order by v.libelle");
    }

    public function getAnnonceurByProduct($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT nom, prenom FROM annonceur, produit where annonceur.idannonceur=produit.idannonceur and produit.idannonceur='$id'");
    }

    public function getAllProducts() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version, p.added_at FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v where p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion  and p.statut IN (1,2) order by p.designation");
    }

    public function getAllProductsValidated() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version, p.added_at FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v where p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion  and p.statut=1 order by p.designation");
    }

    public function getAllProductsValidatedByCat($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version, p.added_at FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v where p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion and p.idtypeProduit='$id'  and p.statut=1 order by p.designation");
    }

    public function getAllProductsValidatedByCarInfos($idmarque, $idmodele, $idcarburant) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version, p.added_at FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v where p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion and p.idmarque='$idmarque' and p.idmodele='$idmodele' and p.idcarburant='$idcarburant'  and p.statut=1 order by p.designation");
    }

    public function getAllProductsValidatedByMarque($idmarque) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version, p.added_at FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v where p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion and p.idmarque='$idmarque' and p.statut=1 order by p.designation");
    }

    public function getOffers() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version, p.added_at FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v where p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion  and p.statut=1 order by p.designation limit 5");
    }

    public function getAllProductsByAnnonceur($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant, v.libelle as version, p.added_at FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,annonceur a ,version v where p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idannonceur=a.idannonceur and p.idversion=v.idversion  and p.statut IN (1,2) and p.idannonceur=$id order by p.designation");
    }

    public function getAllCarsByUser($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn, "SELECT v.idvehicule, v.immatriculation, v.vin, v.statut, m.libelle as modele, c.libelle as carburant, ma.libelle as marque, vs.libelle as version, v.added_at FROM vehicule v,modele m,carburant c,marque ma,utilisateur u ,version vs where v.idmodele=m.idmodele and v.idcarburant=c.idcarburant and v.idmarque=ma.idmarque and v.idutilisateur=u.idutilisateur and v.idversion=vs.idversion  and v.statut=1 and v.idutilisateur=$id order by v.added_at");
    }

    /**
     * Fetching user by email
     * @param String $email User email id
     */
    public function getAdminByUsername($pseudo) {
        $stmt = $this->conn->prepare("SELECT idAdministrateur,nom,prenom,pseudo FROM administrateur WHERE pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        if ($stmt->execute()) {
            // $user = $stmt->get_result()->fetch_assoc();
            $stmt->bind_result($id, $lastname, $firstname, $username);
            $stmt->fetch();
            $user = array();
            $user["idAdministrateur"] = $id;
            $user["nom"] = $lastname;
            $user["prenom"] = $firstname;
            $user["pseudo"] = $username;
            $stmt->close();
            return $user;
        } else {
            return NULL;
        }
    }

    /**
     * Fetching user by email
     * @param String $email User email id
     */
    public function getAnnonceurByEmail($email) {
        $stmt = $this->conn->prepare("SELECT idannonceur,nom,prenom,email FROM annonceur WHERE email = ?");
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            // $user = $stmt->get_result()->fetch_assoc();
            $stmt->bind_result($id, $lastname, $firstname,$email);
            $stmt->fetch();
            $user = array();
            $user["idannonceur"] = $id;
            $user["nom"] = $lastname;
            $user["prenom"] = $firstname;
            $user["email"] = $email;
            $stmt->close();
            return $user;
        } else {
            return NULL;
        }
    }

    public function getProductById($id) {
        $stmt = $this->conn->prepare("SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.idtypeProduit as idType, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v WHERE p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion  and p.statut=1 and p.idproduit=?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $stmt->bind_result($idannonceur, $idproduit,$designation,$description,$reference,$prix,$poids,$photo,$statut,$commentaire,$idType,$type,$modele,$carburant,$etat,$marque,$fabricant,$version);
            $stmt->fetch();
            $data = array();
            $data["idannonceur"] = $idannonceur;
            $data["idproduit"] = $idproduit;
            $data["designation"] = $designation;
            $data["description"] = $description;
            $data["reference"] = $reference;
            $data["prix"] = $prix;
            $data["poids"] = $poids;
            $data["photo"] = $photo;
            $data["statut"] = $statut;
            $data["commentaire"] = $commentaire;
            $data["idType"] = $idType;
            $data["type"] = $type;
            $data["modele"] = $modele;
            $data["carburant"] = $carburant;
            $data["etat"] = $etat;
            $data["marque"] = $marque;
            $data["fabricant"] = $fabricant;
            $data["version"] = $version;
            $stmt->close();
            return $data;
        } else {
            return NULL;
        }
    }

    public function getProductByRef($ref) {
        $stmt = $this->conn->prepare("SELECT p.idannonceur,p.idproduit, p.designation, p.description, p.reference, p.prix, p.poids, p.photo, p.statut, p.commentaire, tp.idtypeProduit as idType, tp.libelle as type, m.libelle as modele, c.libelle as carburant, ep.libelle as etat, ma.libelle as marque, f.libelle as fabricant,v.libelle as version FROM produit p,typeProduit tp,modele m,carburant c,etatProduit ep,marque ma,fabricant f,version v WHERE p.idtypeProduit=tp.idtypeProduit and p.idmodele=m.idmodele and p.idcarburant=c.idcarburant and p.idetatProduit=ep.idetatProduit and p.idmarque=ma.idmarque and p.idfabricant=f.idfabricant and p.idversion=v.idversion  and p.statut=1 and p.reference=?");
        $stmt->bind_param("s", $ref);
        if ($stmt->execute()) {
            $stmt->bind_result($idannonceur, $idproduit,$designation,$description,$reference,$prix,$poids,$photo,$statut,$commentaire,$idType,$type,$modele,$carburant,$etat,$marque,$fabricant,$version);
            $stmt->fetch();
            $data = array();
            $data["idannonceur"] = $idannonceur;
            $data["idproduit"] = $idproduit;
            $data["designation"] = $designation;
            $data["description"] = $description;
            $data["reference"] = $reference;
            $data["prix"] = $prix;
            $data["poids"] = $poids;
            $data["photo"] = $photo;
            $data["statut"] = $statut;
            $data["commentaire"] = $commentaire;
            $data["idType"] = $idType;
            $data["type"] = $type;
            $data["modele"] = $modele;
            $data["carburant"] = $carburant;
            $data["etat"] = $etat;
            $data["marque"] = $marque;
            $data["fabricant"] = $fabricant;
            $data["version"] = $version;
            $stmt->close();
            return $data;
        } else {
            return NULL;
        }
    }

    /**
     * Fetching event registered
     */
    public function getCountAdmins() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn,"SELECT COUNT(idAdministrateur) as stats FROM administrateur");
    }

    public function getCountAnnonceurs() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn,"SELECT COUNT(idannonceur) as stats FROM annonceur");
    }

    public function getCountMarques() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn,"SELECT COUNT(idmarque) as stats FROM marque");
    }

    public function getCountFabricants() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn,"SELECT COUNT(idfabricant) as stats FROM fabricant");
    }

    public function getCountProducts() {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn,"SELECT COUNT(idproduit) as stats FROM produit where statut IN (1,2)");
    }

    public function getCountUserCars($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn,"SELECT COUNT(idvehicule) as stats FROM utilisateur u, vehicule v WHERE v.idutilisateur=u.idutilisateur and v.statut=1 and v.idutilisateur='$id'");
    }

    public function getCountUserOrders($id) {
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }
        return mysqli_query($this->conn,"SELECT COUNT(idcommande) as stats FROM utilisateur u, commande c WHERE c.idutilisateur=u.idutilisateur and c.statut IN (1,2) and c.idutilisateur='$id'");
    }

    /* ------------- End Lists methods ------------------- */

    /* ------------- Verify existed methods ------------------- */

    /**
     * Checking for duplicate admin by pseudo
     * @param String $pseudo email to check in db
     * @return boolean
     */
    private function isAdminExists($pseudo) {
        $stmt = $this->conn->prepare("SELECT idAdministrateur from administrateur WHERE pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    private function isUserExists($email) {
        $stmt = $this->conn->prepare("SELECT idutilisateur from utilisateur WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    private function isCarExists($immatriculation) {
        $stmt = $this->conn->prepare("SELECT idvehicule from vehicule WHERE immatriculation = ?");
        $stmt->bind_param("s", $immatriculation);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    private function isAnnonceurExists($email) {
        $stmt = $this->conn->prepare("SELECT idannonceur from annonceur WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    /* ------------- End Verify existed methods ------------------- */

    /* ------------- Update methods ------------------- */

    /**
     * Updating user informations
     * @param String $id User ID
     * @param String $lastname User lastname
     * @param String $firstname User firstname
     * @param String $phone User phone
     * @param String $email User login email id
     * @param String $recoveryEmail User login recovery email id
     * @param String $image User picture
     * @param String $password User login password
     */
    public function updateUser($id, $lastname, $firstname, $phone, $email) {
        $stmt = $this->conn->prepare("UPDATE utilisateur set nom_utilisateur=?,prenom_utilisateur=?,contact_utilisateur=?, email_utilisateur=? WHERE id_utilisateur = ?");
        $stmt->bind_param("ssssi", $lastname, $firstname, $phone, $email, $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }
    
    public function updateUserRandomPassword($id, $password) {
        $password_hash = PassHash::hash($password);
        $stmt = $this->conn->prepare("UPDATE utilisateur set mot_de_passe_utilisateur=? WHERE id_utilisateur = ?");
        $stmt->bind_param("si", $password_hash, $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    /* ------------- End Update methods ------------------- */

    /* ------------- Remove methods ------------------- */

    /**
     * Removing intention
     * @param int $id
     */
    public function deleteAdmin($id) {

        $stmt = $this->conn->prepare("DELETE FROM administrateur WHERE idAdministrateur = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteAnnonceur($id) {

        $stmt = $this->conn->prepare("DELETE FROM annonceur WHERE idannonceur = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteMarque($id) {

        $stmt = $this->conn->prepare("UPDATE marque SET statut=0 WHERE idmarque = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteCategorie($id) {

        $stmt = $this->conn->prepare("UPDATE categorie SET statut=0 WHERE idcategorie = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteEtat($id) {

        $stmt = $this->conn->prepare("DELETE FROM etatProduit WHERE idetatProduit = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteFabricant($id) {

        $stmt = $this->conn->prepare("DELETE FROM fabricant WHERE idfabricant = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deletePaiement($id) {

        $stmt = $this->conn->prepare("DELETE FROM moyenPaiement WHERE idmoyenPaiement = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteCarburant($id) {

        $stmt = $this->conn->prepare("DELETE FROM carburant WHERE idcarburant = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteTypeProduit($id) {

        $stmt = $this->conn->prepare("DELETE FROM typeProduit WHERE idtypeProduit = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteModele($id) {

        $stmt = $this->conn->prepare("DELETE FROM modele WHERE idmodele = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteVersion($id) {

        $stmt = $this->conn->prepare("DELETE FROM version WHERE idversion = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function deleteProduct($id) {

        $stmt = $this->conn->prepare("UPDATE produit SET statut=0 WHERE idproduit = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    public function validateProduct($id) {

        $stmt = $this->conn->prepare("UPDATE produit SET statut=1 WHERE idproduit = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    /**
     * Close event
     * @param int $id_event
     */
    public function closeEvent($id_event) {

        $stmt = $this->conn->prepare("UPDATE event set statut_event=0 WHERE id_event=?");
        $stmt->bind_param("i", $id_event);
        $stmt->execute();
        $num_affected_rows = $stmt->affected_rows;
        $stmt->close();
        return $num_affected_rows > 0;
    }

    /* ------------- End Remove methods ------------------- */

    /* ------------- Login methods ------------------- */

    /**
     * Checking user login
     * @param String $email User login email id
     * @param String $password User login password
     * @return boolean User login status success/fail
     */
    public function checkAdminLogin($pseudo, $password) {
        // fetching user by email
        $stmt = $this->conn->prepare("SELECT * FROM administrateur WHERE pseudo = ? and mot_de_passe = ?");

        $stmt->bind_param("ss", $pseudo,$password);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return SUCCESS;
        } else {
            $stmt->close();
            // user not existed with the email
            return FAILED;
        }
    }

    public function checkAnnonceurLogin($email, $password) {
        // fetching user by email
        $stmt = $this->conn->prepare("SELECT * FROM annonceur WHERE email = ? and mot_de_passe = ?");

        $stmt->bind_param("ss", $email,$password);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return SUCCESS;
        } else {
            $stmt->close();
            // user not existed with the email
            return FAILED;
        }
    }

    /**
     * Checking user login
     * @param String $email User login email id
     * @param String $password User login password
     * @return boolean User login status success/fail
     */
    public function checkUserLogin($pseudo, $password) {
        // fetching user by email
        $stmt = $this->conn->prepare("SELECT * FROM utilisateur WHERE email = ? and mot_de_passe = ?");

        $stmt->bind_param("ss", $pseudo,$password);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return SUCCESS;
        } else {
            $stmt->close();
            // user not existed with the email
            return FAILED;
        }
    }

    /* ------------- End Login methods ------------------- */

    /* ------------- Fetching methods ------------------- */

    /**
     * Fetching user by email
     * @param String $email User email id
     */
    public function getUserByEmail($email) {
        $stmt = $this->conn->prepare("SELECT idutilisateur,nom,prenom,phone, email FROM utilisateur WHERE email = ? and statut=1");
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            // $user = $stmt->get_result()->fetch_assoc();
            $stmt->bind_result($id, $lastname, $firstname, $phone, $email);
            $stmt->fetch();
            $user = array();
            $user["idutilisateur"] = $id;
            $user["nom"] = $lastname;
            $user["prenom"] = $firstname;
            $user["phone"] = $phone;
            $user["email"] = $email;
            $stmt->close();
            return $user;
        } else {
            return NULL;
        }
    }

    /**
     * Fetching user api key
     * @param String $user_id user id primary key in user table
     */
    public function getApiKeyByUserId($user_id) {
        $stmt = $this->conn->prepare("SELECT api_key FROM utilisateur WHERE id_utilisateur = ? and statut_utilisateur=1");
        $stmt->bind_param("i", $user_id);
        if ($stmt->execute()) {
            // $api_key = $stmt->get_result()->fetch_assoc();
            // TODO
            $stmt->bind_result($api_key);
            $stmt->close();
            return $api_key;
        } else {
            return NULL;
        }
    }

    /**
     * Fetching user id by api key
     * @param String $api_key user api key
     */
    public function getUserId($api_key) {
        $stmt = $this->conn->prepare("SELECT id_utilisateur FROM utilisateur WHERE api_key = ?");
        $stmt->bind_param("s", $api_key);
        if ($stmt->execute()) {
            $stmt->bind_result($user_id);
            $stmt->fetch();
            // TODO
            // $user_id = $stmt->get_result()->fetch_assoc();
            $stmt->close();
            return $user_id;
        } else {
            return NULL;
        }
    }

    /**
     * Validating user api key
     * If the api key is there in db, it is a valid key
     * @param String $api_key user api key
     * @return boolean
     */
    public function isValidApiKey($api_key) {
        $stmt = $this->conn->prepare("SELECT id_utilisateur from utilisateur WHERE api_key = ? and statut_utilisateur=1");
        $stmt->bind_param("s", $api_key);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    /* ------------- End Fetching methods ------------------- */

    /* ------------- Other methods ------------------- */

    /**
     * Generating random Unique MD5 String for user Api key
     */
    private function generateApiKey() {
        return md5(uniqid(rand(), true));
    }

    function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    /* ------------- End Other methods ------------------- */
}

?>
