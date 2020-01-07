<?php
namespace Metalback\SBRE\Rules;

use Metalback\SBRE\RulesInterface;

class Rule1 implements RulesInterface {
    
    public function condition($condition)
    {
        return false;
    }
    
    public function action()
    {
        return "Hello Rlz";
    }
}
