<?php
/*
Copyright Laurent Claessens
contact : laurent@claessens-donadello.eu

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
//*/


// Ce fichier teste les fonctions définies dans `outils.pph`. C'est une excpetion
// au nommage usuel de mes fichires, pour coller aux demandes du devoir.


require 'outils.php';
require 'ranarray.php';

?>            

<h1>Tests de fonctions pour le TP de php</h1>

<h2>À propos de tableaux</h2>

<h3>Exercice 4</h3>
<ul>
</li>
<li>
 Un tableau classique : 1,2,3:
<br>
<?php
afficheTableauIndice(array(1,2,3));
?>            
</li>
<li>
Un tableau qui illustre le fait que "false" se convertit en la chaîne vide alors que "true" se convertit en "1" :
<br>
<?php
$arr=array("first","second",4,true,false,"last");
afficheTableauIndice($arr);
?>
</ul>

<h3>Exercice 5</h3>

<ul>
<li>
Le tableau classique attendu :
<br>
<?php
afficheTableauAssociatif(array("jour"=>22,"mois"=>"novembre","année"=>2012,"ville"=>"Besançon"));
?>
</li>
<li>
 À peine moins attendu : quelque conversions.
<br>
<?php
afficheTableauAssociatif(array("1"=>1,"true"=>true,"false"=>false,"0"=>0));
?>
</li>
<li>
Un peu d'UTF à la fois dans les clefs et les valeurs :
<br>
<?php
afficheTableauAssociatif(array("à"=>"ù","ô"=>"€","ŋ"=>"ó","ĺ"=>"ñ",""=>"𝄞"));
?>
</li>
</ul>

<h3>Exercice 6</h3>

<p>
    Pour cet exercice, un tableau très attendu :
</p>
<?php
afficheTableauAssociatifHTML(array("jour"=>22,"mois"=>"novembre","année"=>2012,"ville"=>"Besançon"));
?>

<h2>À propos de tableaux aléatoires</h2>

<h3>Exercice 7</h3>
<?php
for ($i=5;$i<=20;$i++)
{
    echo "<h4> Avec ",$i," composantes</h4>";
    afficheTableauIndice(tabAlea($i));
}
?>            

<h3>Exercice 8</h3>
<?php
for ($i=1;$i<=5;$i++)
{
    echo "<h4> Avec ",$i," composantes</h4>";
    afficheTableauIndice(tabAlea($i,$sorting=true));
}
?>            
<h3>Exercice 9</h3>

<ul>
<li>
 Un tableau de 10 cases dont les valeurs sont comprises entre 0 et 20.
<br>
<?php
    afficheTableauIndice(tabAlea(10,$sorting=false,$max_value=20,$accept_duplicate=false));
?>            
</li>
<li>
La même idée, mais avec des valeurs triées dans l'ordre croissant :
<br>
<?php
    afficheTableauIndice(tabAlea(10,$sorting=true,$max_value=20,$accept_duplicate=false));
?>            
</li>
<li>
 Si on veut 10 cases avec des valeurs entre 0 et 5 (sans répétitions), la fonction lève une exception. Sans cette précaution, la boucle `while` ne finirait jamais, et le serveur ne répondrait jamais.

Grâce à la levée d'exception, il n'y a pas de plantage, mais l'interprétation s'arrête et la page est tronquée.
<?php
    afficheTableauIndice(tabAlea(10,$sorting=true,$max_value=5,$accept_duplicate=false));
?>            
Rien n'est affiché ? Normal. Il devrait y avoir un tableau impossible.
</li>

</ul>

Le reste de la page.
