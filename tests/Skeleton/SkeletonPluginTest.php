<?php

namespace ILess\Test\Plugin\Skeleton;

use ILess\Cache\CacheInterface;
use ILess\Cache\FileSystemCache;
use ILess\Parser;
use ILess\Plugin\Skeleton\SkeletonPlugin;

class SkeletonPluginTest extends \PHPUnit_Framework_TestCase
{
    protected function getParser(CacheInterface $cache = null)
    {
        $parser = new Parser([], $cache);

        $parser->getPluginManager()->addPlugin(new SkeletonPlugin());

        return $parser;
    }

    public function testPlugin()
    {
        $parser = $this->getParser();
        $this->doParsingTest($parser);
    }

    protected function doParsingTest(Parser $parser)
    {
        $parser->parseFile(__DIR__.'/_fixtures/test.less');
        $expected = <<< EXPECTED

EXPECTED;

        $css = $parser->getCSS();

        $this->assertEquals($expected, $css, 'Generated CSS is ok');
    }

}
