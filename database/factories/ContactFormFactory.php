<?php

namespace Database\Factories;

use App\Models\ContactForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactForm::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'your_name' => $this->faker->name(),
            'title' => $this->faker->realText(50),
            'email' => $this->faker->unique()->email(),
            'url' => $this->faker->url(),
            'gender' => $this->faker->randomElement(['0', '1']),
            'age' => $this->faker->numberBetween($min = 1, $max =6),
            'contact' => $this->faker->realText(200),
        ];
    }
}
