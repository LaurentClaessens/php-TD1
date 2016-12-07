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

// The tests are supposed to be launched from the script `tests.sh` in the main directory. So we do not 
// include "../f_heures.php" and "utilities.php"
include 'outils.php';
include 'tests/utilities.php';

function test_afficheTableauIndice($arr,$expected)
{
    $ob_writer=new OB_textWriter();
    $ob_writer->start();
    afficheTableauIndice($arr);
    $ob_writer->end();
    $obtained=$ob_writer->getText();
    testEquality($obtained,$expected);
}

function test_afficheTableauAssociatif($arr,$expected)
{
    $ob_writer=new OB_textWriter();
    $ob_writer->start();
    afficheTableauAssociatif($arr);
    $ob_writer->end();
    $obtained=$ob_writer->getText();
    testEquality($obtained,$expected);
}
function test_afficheTableauAssociatifHTML($arr,$expected)
{
    $ob_writer=new OB_textWriter();
    $ob_writer->start();
    afficheTableauAssociatifHTML($arr);
    $ob_writer->end();
    $obtained=$ob_writer->getText();
    testEquality($obtained,$expected);
}

$arr=array("first","second",4,true,false,"last");
test_afficheTableauIndice($arr,"first<br>second<br>4<br>1<br><br>last");
test_afficheTableauIndice(array(10,8,4),"10<br>8<br>4");
test_afficheTableauIndice(array(10,8,4),"10<br>8<br>4");
test_afficheTableauAssociatif(array("1"=>2,"2"=>4,"4"=>8),"1 = 2<br>2 = 4<br>4 = 8");
test_afficheTableauAssociatif(array("jour"=>22,"mois"=>"novembre","année"=>2012,"ville"=>"Besançon"),"jour = 22<br>mois = novembre<br>année = 2012<br>ville = Besançon");
test_afficheTableauAssociatifHTML(array("1"=>1,"bof"=>"true",false=>"false"),"<table><tr><td>1</td><td>1</td></tr><tr><td>bof</td><td>true</td></tr><tr><td>0</td><td>false</td></tr></table>");


?>            
