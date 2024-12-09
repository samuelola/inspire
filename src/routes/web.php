<?php

use Illuminate\Support\Facades\Route;
use Samuelola\Inspire\Controllers\InspirationController;


// Route::get('inspire', function(Samuelola\Inspire\Inspire $inspire) {
//     return $inspire->justDoIt();
// });

Route::get('inspire', InspirationController::class);
