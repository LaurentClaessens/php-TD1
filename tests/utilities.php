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


function testEquality($a,$b)
{
    if  ($a!=$b) 
    { 
        echo "pas ok"; 
        echo "Obtained : ",$a," Expected :  ",$b;
    }
}

class OB_textWriter
    /*
     * Redirect all the `echo` calls to a string buffer.
     *
     * This is an adaptation from
     * http://codeutopia.net/blog/2007/10/03/how-to-easily-redirect-php-output-to-a-file/
    */
{
    private $_text_buffer;

    public function __construct()
    {
        $this->_text_buffer="";
    }

    public function start()
    {
        ob_start(array($this,'outputHandler'));
    }

    public function outputHandler($text)
    {
        $this->_text_buffer=$this->_text_buffer.$text;
    }
    public function getText()
    {
        return $this->_text_buffer;
    }

    public function end()
    {
        @ob_end_flush();
    }
}

?>            

