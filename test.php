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

$arr=array("first","second",4,true,false,"last");
afficheTableauIndice($arr);
echo "<br>";
afficheTableauIndice(array(1,2,3));
echo "<br>";
afficheTableauAssociatif(array("jour"=>22,"mois"=>"novembre","année"=>2012,"ville"=>"Besançon"));
echo "<br>";
afficheTableauAssociatifHTML(array("jour"=>22,"mois"=>"novembre","année"=>2012,"ville"=>"Besançon"));
echo "<br>";
afficheTableauAssociatifHTML(array("a"=>"b","1a"=>1,true=>"true",false=>"false"));
?>            
