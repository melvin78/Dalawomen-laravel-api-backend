<?php

namespace Database\Factories\Debits;


use App\Models\Loans\CoopLoanModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CashAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CoopLoanModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

             return [
                 'member_id' => $this->faker->numberBetween(1,25),
                 'amount' => $this->faker->numberBetween(1000,20000),


             ];

    }
}
