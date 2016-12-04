# Mes réponses pour le cours de développement web 2.

Ceci sont mes réponses pour les questions de `php` du cours de «Développement web 2» en troisième année de l'université de Aix-Marseille (en télé enseignement).

## Installation

Pour mémoire, j'installe les choses de la façon suivante (Ubuntu Xenial).

```bash
apt install apache2 && apt install php7.0 && apt install libapache2-mod-php
mkdir /var/www/html/laurent
chown -R <utilisateur> /var/www/html/laurent
```
L'ordre d'installation des paquets semble important. En particulier installer d'abord `libapache2-mod-php` et apache ensuite ne fonctionne pas.

Le script `make.sh`, très minimaliste pour l'instant copie simplement les fichiers `php` du répertoire courant vers ```/var/www/html/laurent```. Il ne me suffit plus que me rendre à l'adresse [http://localhost/laurent/](http://localhost/laurent) pour voir le résultat.

## `heures.php`

Ce programme affiche l'heure avec un petit formatage conditionnel suivant que nous soyons le matin ou l'après-midi.

### Fichiers

* `heures.php`. Le programme proprement dit.
* `f_heures.php`. Les fonctions appelées par `heures.php`. La séparation permet de tester de façon plus zen.

