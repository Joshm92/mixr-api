<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Cocktails;
use App\Http\Controllers\API\Ingredients;
use App\Http\Requests\API\CocktailRequest;


Route::group(["prefix" => "cocktails"], function () {
    Route::get("", [Cocktails::class, "index"]);
    Route::post("", [Cocktails::class, "store"]);

    Route::group(["prefix" => "{cocktail}"], function () {
        Route::get("", [Cocktails::class, "show"]);
        Route::put("", [Cocktails::class, "update"]);
        Route::delete("", [Cocktails::class, "destroy"]);    
    });
});

Route::group(["prefix" => "ingredients"], function () {
    Route::get("/{ingredient}", [Ingredients::class, "show"]);
    Route::post("", [Ingredients::class, "store"]);

    Route::group(["prefix" => "{ingredient}"], function () {
        Route::delete("", [Ingredients::class, "destroy"]);    
    });
});


