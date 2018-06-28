# Cahier technique
#####  Project hunter

## Table des matières

### 1 - Table des matières
### 2 - Introduction
Dans le futur, les humains terriens on la capacité de voyager très loin dans l'univers grace à un système de "stargate", cette technologie à permis à bon nombres de projets de voir le jour. Aujourd'hui nous nous intéressons à XenoShop, c'est une entreprise qui possède plusieurs élevage de différente éspèce alien. Avec XenoShop, adopter votre alien de compagnie!
#### 2.1- Objectifs
Notre objectif est de faire une site e-commerce et de faire un chiffre d'affaire en vendant vivariums avec des animaux qui ont leurs habitat naturel qui a disparu, notre objectif et de faire perdurer leur espèce grâce à nos vivariums qui recréer leur espace naturel et aux utilisateurs qui peuvent entretenir ces espèces
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
**Xenomorphe**

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

**Vivarium**

* taille, integer
* pression, float
* température, float
* atmosphère
* prix, float

**Nourriture**

* Nom, string
* Description, string
* Prix, float
* image_src, string. 
* image_alt, string
* quantité, integer
* dangerosité, string

**Profil**

* login, string
* password, string
* nom, string
* adresse, string
* planete, string
* email, string


##### 3.1.2 Solutions back-end

* Mysql 
* PHP

##### 3.1.3 Solutions front-end
* HTML5 BEM
* SLIDER
* Filter

#### 3.2- Dépendances
* Jquery
* Easy admin
* Symfony flex
* Symfony anotation
* node-sass
* webpack-encore
* twig


### 4 - Exigences spécifiques
#### 4.1- Cas d'utilisations
Humain qui désire adopter un Xénomorphe de compagnie et de s'en occuper L'être doit connaitres ses goûts en terme de Xénomorphe et connaitres les conditions qu'il doit remplir pour pouvoir s'en occuper convenablement.

 
#### 4.2- Exigences supplémentaires

### 5 - Base de données
#### 5.1- Définition des entités
entity xenomorphe

* Nom
* Description
* Prix
* image_src
* image_alt
* temperature
* pression
* disponibilité
* taille
* type
* dangerosité


#### 5.2- Modélisation
![Modélisation de la BDD](https://i.gyazo.com/836ceaeda4ec2ab0eb541b7508e73dd5.png)

#### 5.3- Projection de volumétrie
Nous visons entre 500 et 1000 personnes par mois sur notre site. 

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
Ouvrir le shell, télécharger le dépôt.

```shell
git clone git@github.com:Anthony-Thuillez/SI_Projet_fin_annee.git
```
Aller dans le fichier téléchargé.

Installer les dépendances de ```composer ```.

```shell
composer install
```
Construir les fichiers  ```SCSS```.

```shell
```
#### 8.1- Installation



#### 8.2- Déploiement

### 9 - Plan de reprise d'activité
Plan en cas de plantage du serveur 












11H40

