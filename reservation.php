<?php


class Maconnection
{  
    private $nomBaseDeDonnees;
    private $motDePasse;
    private $nomUtilisateur;
    private $hote;
    private $connectionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse, $nomUtilisateur, $hote)
    {
        $this->nomBaseDeDonnees = $nomBaseDeDonnees;
        $this->motDePasse = $motDePasse;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->hote = $hote;


        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connectionPDO = new PDO($dsn, $this->nomUtilisateur, $this->motDePasse);
            $this->connectionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo " True 2Ki à reserver ";
                        
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    }
}
// Récupération des données du formulaire
$room = $_POST['room'];
$start_time = $_POST['start-time'];
$end_time = $_POST['end-time'];

// Insertion de la réservation dans la table "reservations"
$sql = "INSERT INTO reservations (room_id, heure_arriver, heure_depart, utilisateurs_ID) VALUES ('$room', '$start_time', '$end_time', '1')";



$uneConnection = new Maconnection("identification" , "", "root", "localhost");
?>




