<?php


namespace App\Traits;


use Faker\Factory;
use Faker\Generator;
use Xvladqt\Faker\LoremFlickrProvider;

trait SeederSetupTrait
{
    public Generator $faker;

    public function setup(): void
    {
        $this->faker = Factory::create(locale: 'ru_RU');
        $this->faker->addProvider(provider: LoremFlickrProvider::class);
    }
}
