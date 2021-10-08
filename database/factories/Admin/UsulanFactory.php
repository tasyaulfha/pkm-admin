<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Usulan;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsulanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usulan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'id_user'=>$this->faker->numberBetween(1,20),
        'judul_usulan'=>$this->faker->title,
        'skema_usulan'=>$this->faker->randomElement(array('PKM-P','PKM-R','PKM-PM','PKM-K','PKM-PI,','PKM-KC')),
        'abstrak'=>$this->faker->paragraph(),
        'url_usulan'=>$this->faker->url(),
        'nidn_dosen'=>$this->faker->numberBetween(16111111,21811111),
        'status_usulan'=>$this->faker->randomElement(array('TERKIRIM','PROSES REVIEW','DITERIMA')),
        'type'=>$this->faker->randomElement(array('Seleksi Internal','PKM Idea Challange','PKM Camp'))
        ];
    }
}
