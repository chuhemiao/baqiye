<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'link_name' => '扒企业',
                'link_title' => '扒出你心中的企业',
                'link_url' => 'http://www.baqiye.com',
                'link_order' => 1,
            ],
            [
                'link_name' => '梦遥奇缘',
                'link_title' => '在梦的世界里，遥就是一切',
                'link_url' => 'http://idiot6.com',
                'link_order' => 2,
            ]
        ];
        DB::table('links')->insert($data);
    }
}
