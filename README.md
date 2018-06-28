# Cahier technique
#####  Project hunter

## Table des matières

### 1 - Table des matières
### 2 - Introduction
Dans le futur, les humains terriens on la capacité de voyager très loin dans l'univers grace à un système de "stargate", cette technologie à permis à bon nombres de projets de voir le jour. Aujourd'hui nous nous intéressons à XenoShop, un site de contre-bande qui permet d'acheter illégalement des aliens issus de différentes planetes.
#### 2.1- Objectifs
Notre objectif est de faire une site e-commerce et de faire un chiffre d'affaire en vendant vivariums et animaux.
#### 2.2- Périmètre
L'utilisateur peut se connecter, commander un vivarium et de la nourriture et / ou rendre visite à un Xénomorph pour une éventuelle adoption.


#### 2.3- Définition, acronyme, glossaire
Xénomorphe > Mot qui signifie "Forme étrangère" ou "Alien" utilisé en science fiction.

Vivarium > Habitat adapté aux Xénomorphes

#### 2.4- Références
* [Behance Nasa](https://www.behance.net/gallery/57399771/NASA-A-05 https://www.behance.net/gallery/64435039/SPACED-Homepage-Concept)
* [Lost in the space](https://www.behance.net/gallery/66417621/NETFLIX-LOST-IN-SPACE-WEBSITE-DESIGN-CONCEPT)
* [Animalis](https://www.animalis.com/)
* [Adidas](https://www.adidas.fr/)
* [Asos](http://www.asos.fr/)
* [Nike](https://www.nike.com/fr/fr_fr/)

#### 2.5- Vue d'ensemble
Fonctionnalités du site web :

* Personnalisation et commande de Vivarium
* Prendre rendez vous pour rendre visite à un Xénomorph
* Achat de la nourriture pour Xénomorph

![Sitemap](https://i.gyazo.com/a49a7ecf367f843801c181e93cd492d4.png)


### 3 - Description d'ensemble
#### 3.1- Choix techniques
* ```MYSQL```
* ```PHP``` / ```symfony```
* ```JavaScript``` / ```jquery```
* ```HTML 5```
* ```CSS``` / ```SASS```

##### 3.1.1 Bases de données
Base de donnée MySQL 5.7.

##### 3.1.2 Solutions back-end

Nous utiliserons le framework PHP Symfony en version 4.1.

##### 3.1.3 Solutions front-end

Intégration simple en html/css/js accouplée au templating avec Twig.

#### 3.2- Dépendances

Symfony 4.1 via le package composer symfony/skeleton.

### 4 - Exigences spécifiques
#### 4.1- Cas d'utilisations
Humain qui désire adopter un Xénomorphe de compagnie et de s'en occuper L'être doit connaitres ses goûts en terme de Xénomorphe et connaitres les conditions qu'il doit remplir pour pouvoir s'en occuper convenablement.


#### 4.2- Exigences supplémentaires

### 5 - Base de données
#### 5.1- Définition des entités

**TABLE Xenomorphe**

* Nom, string
* Description, string
* Prix, float
* image_src, string
* image_alt, string
* temperature, string
* pression, string
* disponibilité, boolean
* taille, string
* type, string
* dangerosité, string

**TABLE Vivarium**

* taille, integer
* pression, float
* température, float
* atmosphère
* prix, float

**TABLE Nourriture**

* Nom, string
* Description, string
* Prix, float
* image_src, string.
* image_alt, string
* quantité, integer
* dangerosité, string

**TABLE Profil**

* login, string
* password, string
* nom, string
* adresse, string
* planete, string
* email, string


#### 5.2- Modélisation
![Modélisation de la BDD](https://i.gyazo.com/836ceaeda4ec2ab0eb541b7508e73dd5.png)

#### 5.3- Projection de volumétrie
Nous visons entre 500 et 1000 personnes par an sur notre site.

### 6 - Architecture technique
#### 6.1- Classes
#### 6.2- Diagramme de classes
#### 6.3- Interfaces externes

### 7 - Sécurité
#### 7.1- Etude des risques

* Possibilité de se faire hack un compte.
* L'animal se perd dans une autre dimension pendant la téléportation.



#### 7.2- Solutions

* Back up toutes les semaines.



### 8 - Installation et déploiement

##### Requis :
PHP >= 7.1.3
MySQL 5.7
PDO-MySQL PHP extension
Composer

#### 8.1- Installation
Executer ces commandes pour installer le projet :

```shell
$ git clone git@github.com:Anthony-Thuillez/SI_Projet_fin_annee.git
$ cd SI_Projet_fin_annee
$ composer install
```

Après avoir installé le projet, il faut synchroniser les schemas de la base de donnée.

```shell
$ php bin/console doctrine:database:create
$ php bin/console doctrine:schema:update --force
```

Lancer le serveur :

```shell
$ php bin/console server:run
```

#### 8.2- Déploiement
Par défaut, l'application est déployée sur le port 80 à l'intérieur du container et le port 8000 à l'extérieur.
Pour compiler le SCSS en CSS ouvrir le Shell et ecrire ```$ ./node-modules/.bin/encore dev --watch ```

### 9 - Plan de reprise d'activité
Plan en cas de plantage du serveur
