<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 11.03.19
 * Time: 10:39
 */

require_once 'composer.json';
use App\Fish;
use App\PredatoryFish;

$non_predatory1 = new Fish(10, false );
$non_predatory2 = new Fish(20, false );
$predatory3 = new PredatoryFish(10, true );
$predatory4 = new PredatoryFish(20, true );

$a = $predatory3->eat($non_predatory1);
$predatory4->eat($non_predatory2);

echo "$a";