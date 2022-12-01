<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik'=>$this->faker->bothify('################'),
            'nama'=>$this->faker->name(),
            'umur'=>$this->faker->randomNumber(2),
            'tgl_lahir'=>$this->faker->date(),
            'pekerjaan'=>$this->faker->jobTitle(),
            'jenis_kelamin'=>$this->faker->randomElement(['L','P']),
            'no_hp'=>$this->faker->phoneNumber(),
            'kategori_id'=>mt_rand(1,2),
            'alamat'=>$this->faker->address()
            
        ];
    }
}
