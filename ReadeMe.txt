Novelis wordpress webSite ReadMe
Site créer avec WordPress
Dossier du projet: novelis

======================

-----------------------------------------------------------------------------
								Description du site web
-----------------------------------------------------------------------------


Le site web contient 9 pages principaux
* Page d'accueil
* Qui somme nous
* Nos valeurs
* Nos offres
* Carrières
* Postuler
* LAB R&D
* Blog
*Contact

**Note:
Postuler ,Blog et Contact sont des nouvelles pages pour le site Novelis

		Postuler : Présente les offres de travail ouverts par novelis.
		Blog     : est une page qui contient les articles concernant les nouveautés technologique ou article explicatif d'un projet réalisé ,publié par l'admin ou les auteurs de site dans le champs de publication "jobs'.

		Contact  :Formulaire avec lequel les utilisateurs peuvent contacter la société.



-------------------------------------------------------------------------------
											Installation
-------------------------------------------------------------------------------

##Implémentation de base de données mySql

 * Créer une base de donnée(sous le nom de novelis par exemple).
 * Executer le script "novelis.sql" qui contient les tables de la base de données de notre site wordpress.

## Modification du fichier de configuration wp-config.php

	Le fichier wp-config.php est l'un des fichiers les plus importants de votre installation WordPress. Ce fichier se trouve à la racine de votre répertoire des fichiers WordPress et contient les détails de configuration de base de votre site Web, tels que les informations de connexion à la base de données.

	Pour modifier le fichier wp-config.php de votre installation, vous aurez besoin de ces informations:

 		#Nom de la base de données de WordPress: Le nom de la base de données que vous avez créer
 		#Utilisateur de la base de données MySQL: votre nom comme utilisateur de mysql
 		#Mot de passe de la base de données MySQL: votre mot de passe
		#Adresse de l’hébergement MySQL

 	Alors vous modifier cette partie là de votre fichier wp-config.php

		/ ** MySQL settings - You can get this info from your web host ** //
		/** The name of the database for WordPress */
		define( 'DB_NAME', 'database_name_here' );

		/** MySQL database username */
		define( 'DB_USER', 'username_here' );

		/** MySQL database password */
		define( 'DB_PASSWORD', 'password_here' );

		/** MySQL hostname */
		define( 'DB_HOST', 'databaseHost_here' );


##Connexion au site web

Lancez le site web et authentifiez-vous avec les données suivant(vous pouvez changer vos informations comme utilisateur  après votre connexion allant au Menu ->Utilisateur->Votre profil)
  *Nom d’utilisateur ou adresse e-mail: root
  *Mot de passe: nassima1992


  ------------------------------------------------------------------------------------
  								Modification nécessaire à faire!!!
  ------------------------------------------------------------------------------------

  ##Settings

  1) Il faut changer WP MAIL SMTP 

  Allez Réglages->WP MAIL SMTP->settings 

  Changer From Email avec Email de Novelis (exemple: info@novelis-consulting.com ),c'est l'adresse e-mail à partir de laquelle les e-mails sont envoyés.

 Changer SMTP Username à l'adresse e-mail que vous avez saisi en haut
 Changer SMTP Password au mot de passe votre e-mail

 !PS:  Ne pas confondre l'email utilisé avec l'adress e-mail où vous voulez recevoir les mails des condidatures d'emploi où les emails de contact.

 2)Changer les adresses e-mail des formulaires de postulation et de contact

 		Allez au Contact->Formulaires de contact
 		Choisissez Formulaire de contact1
 		Cliquez sur l'onglet Email
 		  Dans " Pour" Changez l'adresse e-mail par info@novelis-consulting.com,c'est l'adresse où vous recevrez les messages des utilisateurs envoyer à partir de formulaire de contact.

 		  Maintenant faites la même chose pour le formulaire de postulation mais cette fois-ci changer l'adresse e-mail dans "Pour" par job@novelis-consulting.com; l'adresse e-mail où vous recevrez  les mails des condidatures d'emploi.


 3)Settings de l'extension Weglot

L'extension Weglot est un des meilleurs extensions qui rend un site web multilingue.

	Allez à Weglot dans le menu latéral

		Changez la Clé API par votre clé API pour cela il faut visitez le site weglot.com et créer votre compte weglot.Copiez votre Clé API et changer le dans l'extension.

4)Editer le fichier single-job.php
Changer le lien de boutton postuler de la page single-job.php par son le lien de la page Postuler aprés l'hébergement de site.
Allez à novelis/wp-content/themes/llorix-one-lite ,cherchez fichier single-job.php
Allez à la ligne 92 et changer l'attribut href du boutton.

5)Changer le lien de boutton postuler dans la page d'accueil
 Ouvrez la page d'Accueil
 Cliquez en haut sur personnaliser->Sections de page d'accueil-> Section de gros titre
 Changez le lien du bouton par le vrai lien de la page job apres l'hébergement de site.

 6)Ajouter du contenu dans la section "Happy Customers" et le contenu à la fin de la page Carrières.

--------------------------------------------------------------------------------------
									La contribution
--------------------------------------------------------------------------------------
##L'ajout des articles dans Blog

  #Allez à Articles->Ajouter
  #Saisissez le titre d'article
  #Le contenu d'article ,vous pouvez aussi ajouter un média qui sera afficher dans l'article.
  #N'oubliez pas de définir l'image mise en avant.(c'est l'image qui sera afficher dans l'archibe des blogs/la page des Blogs)
  #Choisissez la catégorie inforlatique ou vous pouvez vous même créer une nouvelle catégorie.
  #Cliquez sur publier.Maintenant l'article est publié dans la page des blogs.

 ##L'ajout des offres d'emploi
  #Allez à jobs->Ajouter un(e)nouveau(elle)
  #Saisissez le poste comme un titre
  #Remplissez les champs Requis au dessous

  ##L'ajout des pages

   #Allez au Pages->Ajouter
   #Saisissez le nom de la page dans 'Saisissez votre titre ici'
   #Personalisez et Modifier votre page avec  Elementor

   ----------------------------------------------------------------------------------------------------
   										Le développement
   ----------------------------------------------------------------------------------------------------

##La page Postuler/jobs page
 #Si vous vouez modifier les informations qui sont affichés pour un offre de job dans la Page postuler
 il faut modifier le fichier content-job.php, novelis/wp-content/themes/llorix-one-lite/content-job.php.
 #Le fichier .php qui s'occupe d'appler le template content-job.php et archive-job.php qui se trouve dans le même repertoire.

##Affichage d'un offre d'emploi/single job
Le fichier single-job.php est le responsable sur l'affichage des informatons d'offre d'emploi.
Vous trouverez ce fichier dans le repertoire suivant : novelis/wp-content/themes/llorix-one-lite/




