<?php /* fichier liste-agence.inc.php */

  $requete = "SELECT agence_id, agence_logo, agence_secteur, agence_lat, agence_lon FROM agence";
  /**/// echo $requete;
  $resultat = $con->query($requete);

  
  /* AFFICHAGE INFOS DE LA BDD ================================ */
  while($donnees = $resultat->fetch()){ ?>
     <p><span><?php echo $donnees['agence_id']; ?></span>.
        <span id="logo<?php echo $donnees['agence_id']; ?>"><?php echo $donnees['agence_logo']; ?></span>.png | 
        <span id="secteur<?php echo $donnees['agence_id']; ?>"><?php echo $donnees['agence_secteur']; ?></span>km | 
        <span id="latitude<?php echo $donnees['agence_id']; ?>"><?php echo $donnees['agence_lat']; ?></span> | 
        <span id="longitude<?php echo $donnees['agence_id']; ?>"><?php echo $donnees['agence_lon']; ?></span>
     </p><?php
  }

?>