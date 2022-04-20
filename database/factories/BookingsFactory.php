<?php

namespace Database\Factories;

use App\Models\Bookings;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'operator' => $this->faker->word,
        'bus_name' => $this->faker->word,
        'point_of_origin' => $this->faker->word,
        'start_time' => $this->faker->word,
        'destination' => $this->faker->word,
        'drop_time' => $this->faker->word,
        'ticket_no' => $this->faker->word,
        'passenger_name' => $this->faker->word,
        'age' => $this->faker->randomDigitNotNull,
        'contact_no' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
