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
        $faker = \Faker\Factory::create('fr_FR');
        $users = [];
        for($i = 0; $i < 10; $i++){
            $date = $faker->unixTime('now');
            $users[] = [
                'oauth_provider' => ' ',
                'oauth_uid' => ' ',
                'user_name' => $faker->domainWord(),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->freeEmail(),
                'locale' => $faker->locale(),
                'picture' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker', true),
                'created' => date('Y-m-d H:i:s', $date),
                'modified' => date('Y-m-d H:i:s', $date),
                'password' => $faker->md5(),
            ];
        }

        $this->insert('users', $users);

    }
}
