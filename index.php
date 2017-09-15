<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Maelle LaLicorne (Motzee)">
	<meta name="description" content="Projets expérimentaux de développement web en html5, css3, php7, SQL et js" />
	<meta name="keywords" content="simplon, Lyon, Maelle, LaLicorne, Motzee, html5, CSS3, JS, php, SQL" />
	<title>Projets de LaLicorne</title>
    <link rel="stylesheet" href="styles.css" />
    
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> <!--si t'es un vieux navigateur, t'as besoin de ça pour comprendre la nouvelle ossature de page issue de html5-->
</head>

<body>
<header role="banner">
<div id="presentation">
	<nav id="refs">
		<ul>
			<li><a href="https://github.com/Motzee" title="Mon profil GitHub"><img class="img-ref" src="cv/img/github-logo.png" alt="GitHub" /></a></li>
			<li><a href="https://www.linkedin.com/in/perronm26/" title="mon profil LinkedIn"><img class="img-ref" src="cv/img/linkedin_logo.png" alt="LinkedIn" /></a></li>
			<li><a href="https://talents.simplon.co/#!/profil/5992b976347c5524d81ce7b7" title="Mon profil sur Talents Simplon"><img class="img-ref" src="cv/img/simplon-logo-lyon.png" alt="Simplon" /></a></li>
		</ul>
	</nav>
	<div><h1>Maelle LaLicorne</h1>
			<p id="intitule">Développeuse web fullstack junior</p>
		</div>
		<figure id="pict">
			<img class="img-avatar recto" src="avatar.jpg" alt="avatar de LaLicorne" />
			<img class="img-avatar verso" src="trombine.png" alt="avatar de LaLicorne" />
		</figure>
		
	</div>

	<section id="acquis"><h2>Langages</h2>
		<figure id="langages">
			<img class="bonnemaitrise" src="cv/img/html5.png" alt="HTML5" title="Utilisation des balises sémantiques, notions d'accessibilité que je souhaiterais vivement perfectionner" />
			<img class="bonnemaitrise" src="cv/img/css3.png" alt="CSS3" title="Bonne aisance dans l'usage des CSS (flexbox, sprites, transitions...)." />
			<img class="bonnemaitrise" src="cv/img/php7.png" alt="PHP7" title="Manipulation de fichiers via php, système de sessions et bases de données SQL. Notions de sécurisation, sujet qui m'intéresse particulièrement" />
			<img class="connait" src="cv/img/sql.png" alt="SQL" title="Création et utilisation de bases de données avec profil utilisateur" />
			<img class="connait" src="cv/img/JS.png" alt="JS, AJAX et JSON" title="Utilisation de JS en front et back. Reqêtes AJAX et communication de données entre langages via JSON" />
			<img class="notions" src="cv/img/ruby.png" alt="notions de Ruby" title="les bases de Ruby, par curiosité" />
		</figure>
	</section>

	<section><h2>Technologies et outils</h2>
	<figure id="techs">
		<!--OS-->
			<img class="connait" src="cv/img/windows-10.png" alt="Windows 10" title="Bonne maitrise de Windows 10 dans une utilisation bureautique (longue expérience de médiatrice informatique et internet avec)" />
			<img class="connait" src="cv/img/linux-ubuntu.png" alt="Linux Ubuntu" title="Bonne maitrise de Linux en utilisation bureautique et émulation serveur" />
	
		<!--Serveurs-->
			<img class="connait" src="cv/img/nginx.png" alt="NginX" title="Configuration serveur de base, notions d'utilisation du gestionnaire de paquets Composer" />
			<img class="notions" src="cv/img/nodejs.png" alt="NodeJS" title="Création d'un serveur (de 0 ou via Express) avec NodeJS, utilisation du gestionnaire de paquets NPM, notions de templates JS avec Mustache, création et utilisation d'API" />
			<img class="notions" src="cv/img/wamp-mysql.png" alt="Wamp et MySQL" title="Notions de Wamp, création et utilisation de bases de données en passant par MySQL" />
	
		<!--IDE-->
			<img class="connait" src="cv/img/visualstudiocode.png" alt="Visual studio code" title="Utilisation standard de Visual Studio Code (travail par dossier de projets, synchronisation avec git, ...)" />
			<img class="connait" src="cv/img/netbeans.png" alt="Netbeans" title="Utilisation standard de Netbeans (travail par dossier de projets)" />

		<!--Bibliothèques-->
			<img class="notions" src="cv/img/jquery.png" alt="jQuery" title="notions de jQuery" />

		<!--Frameworks-->
			<img class="notions" src="cv/img/bootstrap.png" alt="Bootstrap" title="notions de Bootstrap (mais très honnêtement : je suis plus à l'aise avec les CSS brutes, que je maîtrise bien" />

		<!--CMS-->
			<img class="notions" src="cv/img/WordPress.png" alt="Wordpress" title="notions de Wordpress : création de site, d'utilisateurs, installation de thèmes et plugins. Création ou modification sommaire de templates de pages ou articles." />
			<img class="" src="cv/img/" alt="" title="" />		
		
		<!--Préprocesseurs-->
			<img class="connait" src="cv/img/typescript.png" alt="TypeScript (JS)" title="Utilisation de TypeScript : typage, classes, interfaces" />
			<img class="notions" src="cv/img/less.png" alt="LESS" title="notions de LESS" />

		<!--Outils collaboratifs-->
			<img class="connait" src="cv/img/slack.png" alt="Slack" title="communication via Slack" />
			<img class="notions" src="cv/img/github.png" alt="Git et GitHub" title="notions de bases de git et github : créer, poursuivre et participer à un projet en collaboration" />
			<img class="notions" src="cv/img/Trello.png" alt="Trello" title="Utilisation de Trello pour suivre les différentes étapes d'un projet " />
			<img class="notions" src="cv/img/Framasoft.png" alt="Frama" title="Utilisation des outils collaboratifs libres de Framasoft (framapad, framatalk, etc)" />

		</figure>


	</section>
</header>

<main role="main">

	<nav role="navigation" id="portfolio"><h2>Portfolio</h2>
		<ul>
		<?php
		$listeProjetsJSON = file_get_contents('projets.json') ;
		$listeProjets = json_decode($listeProjetsJSON, true) ;

		//lui faire scanner tout le contenu du dossier
		$projets = scandir('.') ;

		$compteurClasse = 1 ;

		foreach($projets as $projet) {
			//si c'est un dossier et si ça ne commence pas par un point (synonyme de fichier caché)
			if(is_dir($projet) && $projet[0] != '.') {
				$titre = $listeProjets[$projet]['titre'] ;
				$description = $listeProjets[$projet]['description'] ;
				$apercu = $listeProjets[$projet]['apercu'] != null ? $projet."/".$listeProjets[$projet]['apercu'] : "vignette_default.jpg" ;
				$disponible = $listeProjets[$projet]['dispo'] ;
		?>
				<li>
				<a <?php
					if($disponible == true) {
						echo 'id="projet'.$compteurClasse.'"' ;
						$compteurClasse += 1 ;
					}
					?> class="lnk_menu<?php if($disponible != true) { echo ' inactif' ;}?>" href="<?php echo $projet ;?>" title="<?php echo $description ;?>" >
						<img src="<?php echo $apercu ;?>" alt="aperçu du projet <?php echo $titre ;?>" />
						<?php echo $titre ;?>
					</a>
				</li>

		<?php	
			
				}
			}
		?>
		</ul>


	</nav>

	<div>
	<?php
$compteurID = 1 ;

foreach($projets as $projet) {
	if(is_dir($projet) && $projet != '.' && $projet != '..' && $listeProjets[$projet]['dispo'] == true) {
        
        $titre = $listeProjets[$projet]['titre'] ;
        $description = $listeProjets[$projet]['description'] ;
        $apercu = $listeProjets[$projet]['apercu'] != null ? $projet."/".$listeProjets[$projet]['apercu'] : "vignette_default.jpg" ;
        $langages = $listeProjets[$projet]['langages'] ;
        $technos = $listeProjets[$projet]['technos'] ;    
?>
    <article role="article" id="<?php
                echo 'details-projet'.$compteurID ;
                $compteurID += 1 ;
            ?>" class="cache">
        <aside><figure>
            <img src="<?php echo $apercu ; ?>" alt="capture d'écran de <?php echo $titre ; ?>" />
            </figure>
        </aside>
        <section class="explications">
            <h2><?php echo $titre ;?></h2>
            <p><span class="label">Présentation :</span> <?php echo $description ;?></p>
            <p><span class="label">Langages :</span> <?php echo $langages ;?></p>
            <p><span class="label">Technos :</span> <?php echo $technos ;?></p>
            <p class="atom_center"><a class="btn_projet" href="<?php echo $projet."/" ;?>" title="lien vers le site de <?php echo $titre ;?>">Visiter <?php echo $titre ;?></a></p>
        </section>
    </article>

<?php	
		}
	}
?>
	</div>
	<div id="astro" class="♥secret">
        <!--DEBUT CODE ASTROO-->
        <!--debut code css perso-->
        <iframe id="horoscope" width="500" height="150" marginheight="0" marginwidth="0" frameborder="0" align="center" src="http://www.astroo.com/horoscope-du-jour.htm" name="astrooh" allowtransparency="true">
		<!--fin code css perso-->
		<a href="http://www.astroo.com/horoscope-du-jour.htm" target="_top" title="Cliquez-ici pour afficher l'horoscope quotidien"><font face="Verdana" size="2"><b>afficher l'horoscope quotidien</b></font></a></iframe>
        <noscript><a href="http://www.astroo.com/horoscope_du_jour.php" target="_blank">horoscope du jour (le script ne peut s'afficher)</a></noscript>
        <!--FIN CODE ASTROO-->
	</div>
</main>

<script src="script.js"></script>

</body>
</html>
