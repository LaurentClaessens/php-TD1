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

include 'ranarray.php';     
include 'outils.php';     
include 'tests/utilities.php';

function test_randarray1()
{
    $t=tabAlea(4);
    if (count($t)!=4)
    {
        echo "Pas la bone taille";
    }
    if (min($t)<0)
    {
        echo "Un élément trop petit";
    }
    if (max($t)>100)
    {
        echo "Un élément trop grand";
    }
}

test_randarray1();

?>            
