<?php

namespace Database\Factories\Debits;


use App\Models\Debits\BankAccountModels;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BankAccountModels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => $this->faker->numberBetween(1,50),
            'amount' => $this->faker->numberBetween(1000,50000),
            'proof' => \Illuminate\Support\Str::random(10),

        ];
    }
}
