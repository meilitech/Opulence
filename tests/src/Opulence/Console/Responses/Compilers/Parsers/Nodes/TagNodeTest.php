<?php

/*
 * Opulence
 *
 * @link      https://www.opulencephp.com
 * @copyright Copyright (C) 2017 David Young
 * @license   https://github.com/opulencephp/Opulence/blob/master/LICENSE.md
 */

namespace Opulence\Console\Responses\Compilers\Parsers\Nodes;

/**
 * Tests the tag node
 */
class TagNodeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Tests checking if a root node is a tag
     */
    public function testIsTag()
    {
        $node = new TagNode('foo');
        $this->assertTrue($node->isTag());
    }
}
