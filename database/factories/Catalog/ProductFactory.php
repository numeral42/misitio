<?php

namespace Database\Factories\Catalog;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{

    public function definition()
    {
        $name=$this->faker->unique()->text(50);

        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'description'=>$this->faker->text(100),
            'stock'=>$this->faker->randomElement([1,2]),
            'price'=>$this->faker->numerify('#####'),
            'category_id'=>Category::all()->random()->id,
            
        ];
    }
}
