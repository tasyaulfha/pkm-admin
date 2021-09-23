<?php

namespace Database\Factories;

use App\Models\Admin\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nidn_dosen'=>$this->faker->  nidn_dosen,
            'nama_dosen'=>$this->faker->nama_dosen,
            'no_hp'=>$this->faker->no_hp
        ];
    }
}
