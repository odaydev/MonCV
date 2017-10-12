<?php


use Phinx\Seed\AbstractSeed;

class FillUsersTable extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $users = [];

        for($i = 0; $i < 10; $i++){
            $users[] = [
                'user_name' => $faker->lastname(),
                'password' => $faker->password()
            ];
        }

        $this->insert('users', $users);

    }
}
