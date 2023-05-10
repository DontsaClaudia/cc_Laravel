<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
           "type"=>Str::upper(Str::random(10)),
           "date"=> $this->faker->date($format = 'Y-m-d', $max = 'now' ),
           "duree"=>$this->faker->time($format = 'H:i:s', $max = 'now'),
           "id_client"=>rand(1,10), //
        ];
    }
}
