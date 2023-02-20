<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Customer::class;
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'name'=>$this->faker->sentence,
            'active'=>random_int(0,1)
        ];
    }
}
