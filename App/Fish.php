<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 11.03.19
 * Time: 10:41
 */

namespace App;
class Fish
{

//    const TYPE_FISH_PREDATORY = false;
    public $weight;
    public $type=false;

    public function __construct($weight, $type)
    {
        $this->weight = $weight;
        $this->type = $type;

    }

}