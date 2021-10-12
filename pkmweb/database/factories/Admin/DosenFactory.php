<?php

namespace Database\Factories\Admin;

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
            'nidn_dosen'=>$this->faker-> numberBetween(16111111,21811111),
            'nama_dosen'=>$this->faker->name(),
            'no_hp'=>$this->faker->numerify('##########')
        ];
    }
}
