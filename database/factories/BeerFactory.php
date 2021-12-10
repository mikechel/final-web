<?php


use App\User;
use Faker\Generator as Faker;

$factory->define(Beer::class, function (Faker $faker) {

        return [
            'name' =>$faker->name,
            'value'  =>$faker->numberBetween(1,100),
        ];

});
