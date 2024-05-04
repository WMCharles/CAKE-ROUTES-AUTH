<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Products seed.
 */
class ProductsSeed extends AbstractSeed
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
                'name' => 'Neville Franco',
                'price' => '145.00',
                'availability' => 'Aliquam quae vel vero quidem cum autem quidem voluptatem architecto fugit dolorem debitis ut ducimus',
                'description' => 'Molestiae facere fugit enim voluptas id voluptas qui',
                'created' => '2024-05-03 22:08:31',
                'modified' => '2024-05-03 22:08:31',
            ],
        ];

        $table = $this->table('products');
        $table->insert($data)->save();
    }
}
