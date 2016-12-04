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


function printHour($h,$i)
/*
Print "X heures Y minutes".
*/
{
    echo $h," heures ",$i, "minutes";
}

function sayHello($h,$i)
/*
Say "Bonjour il est X heures Y minutes" ("Bonjour" only in the morning). 
*/
{
    if ($h<12)
    {
        echo "Bonjour il est ", printHour($h,$i); 
    }
    else
    {
        echo "Il est ", printHour($h,$i); 
    }
}

?>            
