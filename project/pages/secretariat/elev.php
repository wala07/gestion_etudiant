<?php

include("../../services/db/db.php");
/*
include("../../services/auth/auth.php");
permesion("../home.php",1);
*/
function getcoursname($db,$id){
$req="select nom_matiere from matiere WHERE id_matiere=(SELECT `id__matiere` FROM `enseignant` WHERE `cin_enseignant`='$id')";

$res=$db->excute($req);

$x=mysqli_fetch_array($res);
return $x[0];
}
function search($x,$l){
    for ($i=0;$i<count($l);$i++){
        
        if($l[$i][0]==$x){
            return TRUE;
        }

    }
    return FALSE;

}
function showstate($id){
    $db=new db;
    $t=[];$t2=[];
    $db->connectdb();
    $req="SELECT id_cours,debut,fin,`id_enseignant` FROM `cours` WHERE `id_classe`=(SELECT `id_classe` FROM `etudiant` WHERE `id_etudiant`='$id')order by(debut)DESC";
    
    
    $res=$db->excute($req);
    
    while($s=mysqli_fetch_array($res)){
        array_push($t,$s);
        
    }
    $req2="select idcours from presence where idcarte=(select id_carte from carte_rfid where numero_carte=(SELECT `numero_carte` FROM `etudiant` WHERE `id_etudiant`=$id));";
    
    $res=$db->excute($req2);
    while ($s=mysqli_fetch_array($res)){
        array_push($t2,$s[0]);
        
    }
    $state=[];
    for($i=0;$i<count($t);$i++){
        array_push($state,[$t[$i][0],getcoursname($db,$t[$i][3]),$t[$i][1],$t[$i][2],search($t[$i][0],$t2)]);
    }
    
    return $state;
    

    
}

//showstate(new db(),0);


?>