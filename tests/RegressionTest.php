<?php

require_once 'src/Jade/Node.php';
require_once 'src/Jade/Dumper.php';
require_once 'src/Jade/Lexer.php';
require_once 'src/Jade/Parser.php';
require_once 'src/Jade/Jade.php';

use Jade\Jade;
use Jade\Dumper;
use Jade\Parser;
use Jade\Lexer;

class RegressionTest extends \PHPUnit_Framework_TestCase {

    protected $jade;

    public function __construct() {
        $parser = new Parser(new Lexer());
        $dumper = new Dumper();

        $this->jade = new Jade($parser, $dumper);
    }

    protected function parse($value) {
        return $this->jade->render($value);
    }

    public function testLiteralZero() {
        $this->assertEquals('<p>0</p>' , $this->parse('p 0'));
    }
}
