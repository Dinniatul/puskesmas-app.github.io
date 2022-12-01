<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PoliAnak>
 */
class PoliAnakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pasien_id'=>mt_rand(1,2),
            'nama_ibu'=>$this->faker->name(),
            'nama_ayah'=>$this->faker->name(2),
            'keluhan'=>$this->faker->text(),
            'dokter_id'=>mt_rand(1,3)
        ];
    }
}
