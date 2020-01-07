<?php
namespace Metalback\SBRE;

use Metalback\SBRE\Engine;
use Metalback\SBRE\EngineYaml;

class EngineFactory {

    public function getEngine()
    {
        switch (getenv('RULES_SOURCE')) {
            case 'yaml':
                return new EngineYaml();
                break;
            
            default:
                return new Engine();
                break;
        }
    }
}
