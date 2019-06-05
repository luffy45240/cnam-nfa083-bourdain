<?php

if(isset($_GET['mdp'])){
  if(md5($_GET['mdp'])=='f71dbe52628a3f83a77ab494817525c6'){
//  echo md5($_GET['mdp']);

/* REQUETE d'INSERTION ====================================================== */
    $requete2="INSERT INTO agence (agence_logo, agence_secteur, agence_lat, agence_lon ) 
               VALUES (
                       '".$_GET['logo']."',
                       '".$_GET['secteur']."', 
                       '".$_GET['latitude']."',
                       '".$_GET['longitude']."'
                      )";
    /**/// echo $requete2;

    $resultat = $con->query($requete2);      // Pour préparer et executer la requete 
  }
  else { ?><p class="error">Vous avez du faire une errreur dans le mot de passe</p><?php }
}
?>