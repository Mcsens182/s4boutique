1) Creation du skeleton

Invite de commande :

C:\xampp\htdocs>composer create-project symfony/skeleton s4boutique

_________________________

2) copier coller fichier

composer.json
&
composer.lock

_________________________

3) update des extensions/packs synfony pour ce projet

invite de commande :

composer update

_________________________

4) modifier fichier .env (racine du projet) pour link avec la bdd du projet

remplacer ->
ligne 16 : DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

par ->
DATABASE_URL=mysql://root:@127.0.0.1:3306/Boutique_synfony

_________________________

5) création depôt Git

git init
git add .
git commit -m 'premier depot'


