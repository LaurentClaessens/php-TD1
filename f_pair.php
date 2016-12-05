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

function isPair($x)
/*
 * Return true if `$x` is even and `false` otherwise.
 * (assume that `$x` is integer)
*/
{
    if ($x%2==0) {return true;}
    return false;
}

function isPair_fr($x)
/*
 * return (as string) "pair" if `$x` is even and "impair" otherwise.
 * (assume that `$x` is integer)
*/ 
{
    if (isPair($x)) {return "pair";}
    return "impair";
}

?>            

