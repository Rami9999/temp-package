<?php

Route::get('calculater',function(){
    echo "hello from cal package";
});

Route::get('add/{a}/{b}',[rami\Calculater\CalculaterController::class,'add'])->name('add');
Route::get('sub/{a}/{b}',[rami\Calculater\CalculaterController::class,'sub'])->name('sub');
