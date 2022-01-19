<?php

namespace Database\Factories;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name(),
                'contact' => $this->faker->numerify('##########'),
                'city' => $this->faker->city,
                'seller_id' => Seller::pluck('id')->random(),
        ];
    }
}
