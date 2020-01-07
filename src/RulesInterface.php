<?php
namespace Metalback\SBRE;

interface RulesInterface {
    public function condition($condition);
    public function action();
}
