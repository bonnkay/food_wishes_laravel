<?php

namespace Database\Factories;

use App\Models\restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Utils\Random;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));
        
        $id_restaurant = $this->faker->numberBetween(1,5);
        $name = $this->faker->userName();
        $price = $this->faker->randomFloat(1,0.0, 500000);
        $category = $this->faker->randomElement(['Parrilla', 'Tipico Colombiano', 'Comida Rapida', 'Mariscos y Pescados', 'Ensaladas', 'Oriental']);
        $description = $this->faker->paragraph();
        $image = $faker->imageUrl($width = 200, $height = 200);
        $state = $this->faker->randomElement(['Disponible','No Disponible','Desactivado']);

        return [
            //
            'id_restaurant' => $id_restaurant ,
            'name' => $name, 
            'price'=> $price, 
            'category' => $category,  
            'description' => $description, 
            'image'=> $image,  
            'state' => $state              
        ];
    }
}