<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; //Esto es un helper un ayudante

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Curso::class;

        public function definition()
        {
            $name = $this->faker->sentence();
            return [
                'name' => $name,//$this->faker->sentence(),//Si se deja asi genera error porque tanto name como slug son lo mismo y tambien estan dentro del mismo return
                'slug' => Str::slug($name, '-'),//Str::slug($this->faker->sentence(), '-'),
                'descripcion' => $this->faker->paragraph(),
                'categoria' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
            ];
        }
}
