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

include '../f_heures.php';

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

function test_sayHello($h,$i,$expected)
{
    $ob_writer=new OB_textWriter();
    $ob_writer->start();
    sayHello($h,$i);
    $ob_writer->end();
    $obtained=$ob_writer->getText();
    testEquality($obtained,$expected);
}

test_sayHello(14,59,"Il est 14 heures 59 minutes<br>");
test_sayHello(12,01,"Il est 12 heures 1 minutes<br>");
test_sayHello(11,41,"Bonjour il est 11 heures 41 minutes<br>");
test_sayHello(0,0,"Bonjour il est 0 heures 0 minutes<br>");
?>            
