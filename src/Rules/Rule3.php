<?php
namespace Metalback\SBRE\Rules;

use Metalback\SBRE\RulesInterface;

class Rule3 implements RulesInterface {
    
    public function condition($condition)
    {
        return $condition['activate'] && $condition['age'] > 15;
    }
    
    public function action()
    {
        return "Hello Rlz 3";
    }
}
