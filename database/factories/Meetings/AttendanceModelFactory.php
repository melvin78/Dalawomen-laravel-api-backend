<?php

namespace Database\Factories\Meetings;


use App\Models\Meetings\AttendanceModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttendanceModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meeting_id'=>$this->faker->numberBetween(1,10),
            'member_id'=>$this->faker->numberBetween(1,50)
        ];
    }
}
