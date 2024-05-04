<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Sasha Kelly',
                'email' => 'fynefudir@mailinator.com',
                'phone_number' => '+1 (686) 252-7414',
                'password' => '$2y$10$NOYf9XZVs/JqYRYYSm/14.GMyqfaJuejMY8JpWPXgg7Gplt8rYUVG',
                'created' => '2024-05-03 19:47:18',
                'modified' => '2024-05-03 19:47:18',
            ],
            [
                'id' => 2,
                'name' => 'Masinde Charles',
                'email' => 'wafulacharles47@gmail.com',
                'phone_number' => '0795289737',
                'password' => '$2y$10$LPJD8RDbKiT.4M/Jk/9ZnuffzaoIUrhMINS4R4JrMPVkQAzxLd7ce',
                'created' => '2024-05-03 20:43:04',
                'modified' => '2024-05-03 20:43:04',
            ],
            [
                'id' => 3,
                'name' => 'Charles Masinde',
                'email' => 'admin@example.com',
                'phone_number' => '0795289737',
                'password' => '$2y$10$AueLHdn/3RPO1xiz7jELrehmnFRI8KUHCQPZzdL8tYTjvniB5ZfI6',
                'created' => '2024-05-03 21:08:37',
                'modified' => '2024-05-03 21:08:37',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
