<?php

namespace Database\Factories\Meetings;


use App\Models\Meetings\MinutesModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MinutesModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MinutesModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'minutes'=>$this->faker->randomAscii
        ];
    }
}
