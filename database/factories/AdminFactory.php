<?php

namespace Database\Factories;
use App\Models\Admin;

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
         
                'username' => 'admin',              
                'password' => '123456', // password  
        ];
    }
}
