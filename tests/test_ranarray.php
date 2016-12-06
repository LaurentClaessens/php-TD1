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

function test_randarray2()
{
    $v_min=1000;
    $v_max=0;
    for ($i=0;$i<=20;$i++)
    {
        $tab=tabAlea(50);
        $v_max=max(array($v_max,max($tab)));
        $v_min=min(array($v_min,min($tab)));
    }
    if ($v_min>0) {echo "<br> le minimum devrait être 0.";}
    if ($v_max<100) {echo "<br> le maximum devrait être 100.";}
}

function isSorted($arr)
// return 'true' if the array is sorted.
// return 'false' otherwise.
{
    for ($i=1;$i<count($arr);$i++)
    {
        if ($arr[$i]<$arr[$i-1])
        {
            return false;
        }
    }
    return true;
}

function test_randarray3()
{
    $tab=tabAlea(5,$sorting=true);
    testEquality(isSorted($tab),true);
    $tab=tabAlea(50);
    testEquality(isSorted($tab),false);
    $tab=tabAlea(47,$sorting=true);
    testEquality(isSorted($tab),true);
}

function test_randarray4()
{
    $v_min=1000;
    $v_max=0;
    for ($i=0;$i<=20;$i++)
    {
        $tab=tabAlea(50,$sorting=false,$max_value=10);
        $v_max=max(array($v_max,max($tab)));
        $v_min=min(array($v_min,min($tab)));
    }
    if ($v_min>0) {echo "<br> le minimum devrait être 0.";}
    if ($v_max<10) {echo "<br> le maximum devrait être 100.";}
}

function test_randarray5()
{
    testEquality(isSorted(tabAlea(11,$sorting=false,$max_value=5)),false);
    testEquality(isSorted(tabAlea(12,$sorting=true,$max_value=5)),true);
}

test_randarray1();
test_randarray2();
test_randarray3();
test_randarray4();
test_randarray5();

?>            
