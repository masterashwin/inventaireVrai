<?php $titre = 'A propos Inventaire'; ?>

<ul>
    <li>Ashwin Saravanapavan </li>

    <li>420-4A4 MO Web et Bases de données</li>
    <li>Hiver 2020, Collège Montmorency</li>
</ul>
<h3>Inventaire</h3>
<ul>
    <li>L'application "Inventaire" permet de composer et de
        diffuser des produits.</li>
    <li>La page d'Accueil présente la liste des titres des produits
        avec la prix, le nom de l'administrateur et la description::</li>
    <ul>
        <li>Cette version n'offre pas encore la gestion des admistrateur.
            Les admitrateurs doivent être entrées manuellement dans la base de données.<br>
        </li>
        <li>
            Pour fin de démonstration, cette version offre la possibilité de changer de contrôleur d'accueil.<br />
            L'accueil présente alors plutôt la liste de tous les commandes à l'accueil :
            <ul>
                <li>
                    Chaque commande indique alors le nom du produit pour lequel il a été écrit, avec un lien vers cet produit.
                </li>
                <li>
                    Cela peut vous être utile si vous désirez présenter à l'accueil le côté n de la relation 1 à n pour votre application.
                </li>
            </ul>
        </li>
        <li>
            <form action="<?= $utilisateur != '' ? 'Admin' : ''; ?>commentaires" method="post">
                <input type="submit" value="Changer de controleur d'accueil">
            </form>
        </li>
    </ul>
    <li>Si un admistarteur est en session : </li>
    <ul>
        <li>on retrouve un lien pour créer un nouvel produit :
            <ul>
                <li>
                    Le produit créé est attribué à l'admistrateur en session
                </li>
                <li>
                    La page de création d'un produit offre de spécifier le sujet traité par
                    le produit (type) par autocomplétion.<br>(par http seulement ; ne fonctionne pas avec https pour l'instant)
                </li>
            </ul>
        </li>
        <li>
            Les actions pour effacer/rétablir un commande sont affichées ;
        </li>
        <li>
            MAYBE Les commandes privés sont affichés ;
        </li>
        <li>
            Il n'est plus possible d'ajouter un commande pour un produit.
        </li>
    </ul>
    <li>Les lecteurs du blogue peuvent cliquer sur le titre d'un
        produit pour lire le texte complet du produit :<br>
    </li>
    <ul>
        <li>À la suite du texte du produit on offre la possibilité de
            laisser un commande sur le produit ;</li>
        <li>La personne qui veut laisser un commande doit
            s'identifier à l'aide d'un courriel valide :</li>
        <ul>
            <li>Un message est affiché si le courriel est invalide et le
                commande n'est pas enregistré.<br>
            </li>
        </ul>
        <li>On peut spécifier s'il s'agit d'un commande important(généralement utiliser s'il a des gros spécification qui doit seulement être vue par l'administrateur ou il veut être livré dans moin de 24h(Coûte plus chère)) ou public(une commande qui n'a pas trop de spécification et livraison dans 10 jours(Coûte moin chère)) :</li>
        <ul>
            <li>Pour l'instant cette fonctionnalité n'est pas encore
                implantée et tous les commandes sont affichés.</li>
        </ul>
        <li>On peut effacer un commande après confirmation (par l'auteur de l'produit dans une prochaine version).</li>
        <li>Un commande effacé peut être rétabli (par l'auteur de l'produit dans une prochaine version).</li>
        <li>Un commande ne peut pas être modifié.<br>
        </li>
    </ul>
</ul>
<br>

<table>
    <tr>
        <td>
            <h4>Base de données utilisée par l'application DOIT ETRE CHANGER :</h4>
            <object data="Contenu/images/Blogue-vers-MVC-v1_1_0_1.svg" type="image/svg+xml" height="500" width="800">
                <img src="Contenu/images/blogue_phpmyadmin.jpg" alt="" />
            </object><br />
        </td>
    </tr>
    <tr>
        <td>
            <h4>Basé sur ce modèle original :</h4>
            <a href="http://www.databaseanswers.org/data_models/big_data_hadoop/index.htm">
                <img src="Contenu/images/data_model.gif" alt="" /><br />
                Blog as a "Real Life example :</a>
        </td>
    </tr>
</table>
