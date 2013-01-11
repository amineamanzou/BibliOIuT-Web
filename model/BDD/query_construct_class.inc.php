<?php
/*Requetes nécessaire à l'instanciation des classes*/


$query_login_Membre = "	SELECT * 
						FROM Membre 
						WHERE `Membre`.`loginMembre` = :loginMembre 
						AND `Membre`.`mdpMembre`= PASSWORD(:mdpMembre) ;";
$query_get_Etudiant = "	SELECT * FROM Etudiant	WHERE `Etudiant`.`idEtudiant` = :idEtudiant ;";
$query_get_Emprunt = "	SELECT * 
						FROM Emprunt
						WHERE `Emprunt`.`idEmprunt` = :idEmprunt ;";
$query_get_Reservation = "	SELECT *
							FROM Reservation
							WHERE `Reservation`.`fk_idLivre` = :idLivre
							AND `Reservation`.`fk_idMembre` = :idMembre ;";
$query_get_Livre = "SELECT `titreLivre` , `auteurLivre` , `motTag`
					FROM Livre, Tag
					WHERE `Livre`.`idLivre` = `Tag`.`fk_idLivre`
					AND `Livre`.`idLivre` = :idLivre ;";
?>
