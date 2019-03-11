<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 11.03.19
 * Time: 10:50
 */

namespace App;
//use App\Fish;
class PredatoryFish extends Fish
{

    public function eat($fish)
    {
        $this->weight = $fish->weight;
    }
}