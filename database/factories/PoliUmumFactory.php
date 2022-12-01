<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PoliUmum>
 */
class PoliUmumFactory extends Factory
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
            'keluhan'=>$this->faker->text(),
            'diagnosa'=>$this->faker->text(),
            'tgl_periksa'=>$this->faker->date(),
            'dokter_id'=>mt_rand(1,3)
        ];
    }
}
