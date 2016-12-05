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


// Pour les tests, voir le fichier `test.php`

function afficheTableauIndice($arr)
{
    echo implode("<br>",$arr);
}

function afficheTableauAssociatif($ass)
    // print an associative array under the form
    // key1 = val1
    // key2 = val2
    // in the sense that it adds <br> between each "k=v" term.
{
    $arr=array();
    foreach ($ass as $key=>$val)
    {
        $arr[]=$key." = ".$val;
    }
    echo implode("<br>",$arr);
}

function afficheTableauAssociatifHTML($ass)
    // print the associative array `$ass` as an html <table>...</table>.
{
    echo "<table>";
    foreach ($ass as $key=>$val)
    {
        echo "<tr><td>",$key,"</td><td>",$val,"</td></tr>";
    }
}

?>            

