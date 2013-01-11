<?php
	//Tableau repertoriant les pages
	$tableau = array('Acceuil.html', 'RechercheEmprunt.html','RechercheLivre.html','Contact.html','Deconnexion.html');
		//print_r ($tableau);	
	
	
	//Recuperation du get
	if (!empty($_GET['page']))
		$titre = $_GET['page'];
	else
		$titre = '404 NOT FOUND';
	
//	echo $titre;
	for($i=0;$i<5;$i++)
	{
		//echo $tableau[$i];
		if(strcmp($tableau[$i], $titre)){
			//$i==6;
			}
		else
			$titre = '404 NOT FOUND';
	}
//	echo $i;
	
 include(getcwd().'/view/head.php');
 
// 	si 404 NOT FOUND
		//Notfound.html
 
	if ($titre == 'Accueil'){
		include(getcwd().'/view/header.html');
		include(getcwd().'/view/Connexion.html');
		include(getcwd().'/view/footer.html');
	}


	if ($titre == 'RechercheEmprunt'){
		include(getcwd().'/view/headerperso.html');
		include(getcwd().'/view/rechercheemprunt.html');
		include(getcwd().'/view/footer.html');
	}

	
	if ($titre == 'RechercheLivrePerso'){
		include(getcwd().'/view/headerperso.html');
		include(getcwd().'/view/recherchelivre.html');
		include(getcwd().'/view/footer.html');
	}

  
	if ($titre == 'RechercheLivreEtu'){
		include(getcwd().'/view/headeretu.html');
		include(getcwd().'/view/recherchelivre.html');
		include(getcwd().'/view/footer.html');
	}
  
	if ($titre == 'Contact'){
		include(getcwd().'/view/headeretu.html');
		include(getcwd().'/view/contact.html');
		include(getcwd().'/view/footer.html');
	}
 
 ?>