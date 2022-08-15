<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mesin'     => $this->faker->name(),
            'penumpang' => $this->faker->randomNumber(1),
            'tipe'      => $this->faker->name(),
            'tahun'     => $this->faker->year(),
            'warna'     => $this->faker->name(),
            'harga'     => $this->faker->randomNumber(8)
        ];
    }
}
