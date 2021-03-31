<?php

namespace Database\Factories\Loans;


use App\Models\Loans\LoansAccountModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LoansAccountModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoansAccountModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'loantype_id'=>$this->faker->numberBetween(1,4),
            'approval'=>0,
            'payment_status'=>0,
            'penalty_status'=>0,
            'proof'=>Str::random(5),
            'paydate'=>$this->faker->dateTimeBetween('-3 months','+3 months'),
            'member_id'=>$this->faker->numberBetween(1,50),
            'amount'=>$this->faker->numberBetween(1000,5000)
        ];
    }
}
