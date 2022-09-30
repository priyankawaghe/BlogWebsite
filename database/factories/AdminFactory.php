<?php

namespace Database\Factories;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Admin::class;
    public function definition()
    {
        return [
         
                'username' => $this->faker->name,              
                'password' => bcrypt('123456'), // password  
        ];
    }
}
