<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Utils\Random;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
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
        
        $name = $this->faker->company();
        $email = $this->faker->unique()->safeEmail();
        $adress = $this->faker->address();
        $phone = $this->faker->phoneNumber();
        $description = $this->faker->paragraph();
        $image = $faker->imageUrl($width = 200, $height = 200);
        $link = $this->faker->url();

        return [
            //
            'name' => $name,
            'email'=> $email, 
            'adress' => $adress, 
            'phone' => $phone,  
            'description' => $description, 
            'image'=> $image,  
            'link' => $link              
        ];     
    }
}