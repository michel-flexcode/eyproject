<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'web' => $this->faker->url,
            'mail_domain' => $this->faker->domainName,
            'logo' => $this->faker->imageUrl(),
            // Add any other attributes as needed for the Company model
        ];
    }
}
