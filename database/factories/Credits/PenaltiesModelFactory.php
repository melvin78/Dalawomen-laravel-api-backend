<?php

namespace Database\Factories\Credits;

use App\Models\Credits\PenaltiesModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PenaltiesModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PenaltiesModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'penaltytype_id'=>1,
            'status'=>1,
            'proof'=>Str::random(6),
            'member_id'=>$this->faker->numberBetween(1,6)
        ];
    }
}
