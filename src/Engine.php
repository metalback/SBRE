<?php
namespace Metalback\SBRE;

class Engine extends AbstractEngine {
    /**
     * Dinamically load the rules
     * @return void
     */
    protected function loadRules()
    {
        array_push($this->rules, new Rules\Rule1());
        array_push($this->rules, new Rules\Rule2());
        array_push($this->rules, new Rules\Rule3());
    }
}
