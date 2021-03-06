
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

require 'f_pair.php';
require 'tests/utilities.php';

testEquality(isPair(3),false);
testEquality(isPair(4),true);
testEquality(isPair(-4),true);
testEquality(isPair(-5),false);
testEquality(isPair(0),true);
testEquality(isPair(-0),true);

?>            
