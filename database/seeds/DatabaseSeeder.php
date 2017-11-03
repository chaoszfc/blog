<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
            'link_name'=>'京东',
            'link_title'=>'电商',
            'link_url'=>'www.jingdong.com',
            'link_order' => 1,
               ],

            [
                'link_name'=>'太平洋',
                'link_title'=>'论坛',
                'link_url'=>'http://www.pconline.com.cn',
                'link_order' => 2,
                ],
            ];

        DB::table('links')->insert($data);
    }
}
