[clients]
id_client
nom_client
prenom_client
email_client
password_client
adresse_client
cp_client
ville_client
tel_client
civilite_client
newsletter_client

_____________________

[produits]
id_produit
ref_produit
nom_produit
prix_produit
taille_produit
couleur_produit
photo_produit
description_produit
id_categorie
stock_produit
sexe_produit

_____________________

[panier]
id_panier
id_client
id_produit
quantite_produit
date_panier

_____________________

[categories]
id_categorie
libelle_categorie

_____________________

[commande]
id_commande
id_client
date_commande
id_mode_reglement

_____________________

[detail_commande]
id_detail_commande
id_commande
id_produit
quantite_produit

_____________________

[mode_reglement]
id_mode_reglement
libelle_reglement


