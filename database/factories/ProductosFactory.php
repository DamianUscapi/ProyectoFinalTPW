<?php

namespace Database\Factories;

use App\Models\productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->company,
            'descripcion'=>$this->faker->sentence(6),
            'cantidad'=> $this->faker->randomDigit(100),
            'precio'=>$this->faker->randomFloat(2,5,50),
            'categoria'=>$this->faker->randomElement([1,2])
        ];
    }
}
