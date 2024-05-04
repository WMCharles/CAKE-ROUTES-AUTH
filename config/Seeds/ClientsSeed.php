<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Clients seed.
 */
class ClientsSeed extends AbstractSeed
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
                'name' => 'Charles Masinde',
                'email' => 'wafulacharles47@gmail.com',
                'phone_number' => '0795289737',
                'password' => '1234',
                'created' => '2024-05-03 22:21:01',
                'modified' => '2024-05-03 22:21:01',
            ],
        ];

        $table = $this->table('clients');
        $table->insert($data)->save();
    }
}
