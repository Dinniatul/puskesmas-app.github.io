<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nidn'=>$this->faker->bothify('################'),
            'nama'=>$this->faker->name(),
            'umur'=>$this->faker->randomNumber(2),
            'jenis_kelamin'=>$this->faker->randomElement(['L','P']),
            'spesialis_id'=>mt_rand(1,9),
            'no_hp'=>$this->faker->phoneNumber(),
            'alamat'=>$this->faker->address()
        ];
    }
}
