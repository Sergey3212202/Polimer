<?php
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        factory(User::class)->create([
            'name' => $faker->userName,
            'lastName' => $faker->lastName,
            'email' => 'admin@laravel-shop.test',
            'password' => \Illuminate\Support\Facades\Hash::make('secret'),
            'is_admin' => true,
        ]);

        for ($i = 0; $i < 5; $i++) {
            factory(User::class)->create([
                'name' => $faker->userName,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),

            ]);
        }
    }

}
