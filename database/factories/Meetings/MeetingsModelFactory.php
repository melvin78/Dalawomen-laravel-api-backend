<?php

namespace Database\Factories\Meetings;


use App\Models\Meetings\MeetingsModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MeetingsModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MeetingsModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hostid'=>$this->faker->numberBetween(1,10),
            'minute_id'=>$this->faker->numberBetween(1,10),
            'nickname'=>Str::random(4)
        ];
    }
}
