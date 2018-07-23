<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Student::insert([
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],

                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ],
                [
                    'first_name' => str_random(10),
                    'last_name' => str_random(10).'@gmail.com',
                ]
        ]

        );
    }
}
