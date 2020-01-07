<?php

use PHPUnit\Framework\TestCase;
use Metalback\SBRE\EngineFactory;

class EngineTest extends TestCase
{

    public function testRulesEngineCreated()
    {
        $condition = [];
        $engine = new EngineFactory();
        $this->assertEquals(gettype($engine->getEngine()), 'object');
    }

    public function testRulesEngineReturnHelloWorld()
    {
        $engine = new EngineFactory();
        $condition = [
            'activate' => true,
            'age' => 15
        ];

        $this->assertEquals(gettype($engine->getEngine()->exec($condition)), 'string');
        $this->assertEquals($engine->getEngine()->exec($condition), 'Hello Rlz 2');

        $condition['age'] = 19;

        $this->assertEquals(gettype($engine->getEngine()->exec($condition)), 'string');
        $this->assertEquals($engine->getEngine()->exec($condition), 'Hello Rlz 3');

    }
}
