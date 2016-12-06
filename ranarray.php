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

function tabAlea($size,$sorting=false,$max_value=100)
// retun a renadom array.
// By default the values are integers from 0 to 100.
//
// `size` (integer)  is the size of the array.
// `sorting` (boolean, default=false). When true, the returned array is sorted
// `max_value` (integer, default=100). When given the random elements are
//                      taken in 0...max_value.
//      
{
    $ans=array();
    for ($i=0;$i<$size;$i++)
    {
        $ans[]=mt_rand(0,$max=$max_value);
    }
    if ($sorting) {sort($ans);}

    return $ans;
}

?>            

