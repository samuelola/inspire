<?php
namespace Samuelola\Inspire\Controllers;

use Illuminate\Http\Request;
use Samuelola\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
          $quote = $inspire->justDoIt();

        return $quote; 
    }
}

