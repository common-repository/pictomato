=== Pictomato ===
Contributors: Baptiste Servais
Tags: plugin, avatar, pictomato
Requires at least: 2.0
Tested up to: 2.0
Stable tag: 1.0

Avatars Pictomato dans Wordpress

== Description ==

Ce plugin pour Wordpress permet d'afficher les avatars des membres Pictomato dans les commentaires d'un billet.
This Wordpress plugin can display avatars from the members of Pictomato who have posted comments.

== Installation ==

1. Télécharger le fichier "pictomato.php"
2. Placer le fichier dans le répertoire de plugin (ex: "/wp-content/plugins/" )
3. Ouvrir le fichier PHP qui gère l'affichage des commentaire :

     * Exemple avec le thème par défaut :
     * ouvrir le fichier "comment-template.php" (dans /wp-includes/),
     * ajouter cette ligne : "<?PHP if( function_exists("pictomato_avatar") ) { pictomato_avatar(); } ?>",
     * à l'endroit ou les commentaires sont affichés.
     * Attention : Ne pas oublier de supprimer la ligne qui affiche les avatars par défaut...)

4. Aller dans la partie admin de votre blog, puis dans la section plugin, et activer le plugin "Pictomato"
5. C'est tout !

== Frequently Asked Questions ==

== Screenshots ==
1. Mise en situation de l'affichage des avatars
