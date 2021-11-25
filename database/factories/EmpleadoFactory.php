<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;

    public function definition()
    {
        return [
			'firstName' => $this->faker->name,
			'lastName' => $this->faker->name,
			'condicion' => $this->faker->name,
			'telefono' => $this->faker->name,
			'email' => $this->faker->name,
			'direccion' => $this->faker->name,
			'piso' => $this->faker->name,
			'apartamento' => $this->faker->name,
			'ciudad' => $this->faker->name,
			'zipCode' => $this->faker->name,
        ];
    }
}
