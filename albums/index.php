


<!DOCTYPE HTML>

<html xml:lang="fr">

<head>
    <title>Album photo</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

    <body>
        <?php
$cnx = mysqli_connect("localhost", "root", "", "albums");

if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ";
    exit();
}

?>
    <div id="banniere">Mes albums</div>

    <div id="albums">
        <a  href="index.php?id=2">Chats</a>
        <a  href="index.php?id=1">Chiens</a>
        <a  href="index.php?id=3">Oiseaux</a>
    </div>

    <div id="photos">
        <?php
            //echo $_GET["id"];
            $array_test = array();

            $sql = "SELECT * from comporter";
            $res = mysqli_query($cnx, $sql);

            if (isset($_GET["id"])){
                $url = $_GET["id"];
            }else{
                $url = 1;
            }

            while($ligne = mysqli_fetch_array($res)) {
                if ($ligne["idAlb"] == $url){
                    array_push($array_test, $ligne["IdPh"]);
                }
            }

            $sql = "SELECT * from photos";
            $res = mysqli_query($cnx, $sql);
            while($ligne = mysqli_fetch_array($res)) {
                foreach ($array_test as $value){
                    if ($ligne["idPh"] == $value){
                        echo '<a href="photos/'.$ligne["nomPh"].'.jpg"><img src="photos/'.$ligne["nomPh"].'.jpg"></a>';
                    }
                }
            }