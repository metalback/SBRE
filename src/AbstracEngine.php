<?php
namespace Metalback\SBRE;

class AbstracEngine {
    /**
     * Collection of rules
     * @var IRules
     */
    
    protected $rules;

    /**
     * Constructor of the engine
     * @param array $condition set of conditions
     */
    public function __construct()
    {
        $this->rules = [];
        $this->loadRules();
    }

    /**
     * Execute the rules engine
     * @return Reponse whichever that means
     */
    public function exec($condition)
    {
        foreach ($this->rules as $rule) {
            if ($rule->condition($condition)) {
                return $rule->action();
            }
        }
    }
}
