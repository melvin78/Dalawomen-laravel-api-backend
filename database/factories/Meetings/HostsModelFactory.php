<?php

namespace Database\Factories\Meetings;

use App\Models\Meetings\HostsModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HostsModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HostsModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id'=>$this->faker->numberBetween(1,50),
        ];
    }
}
