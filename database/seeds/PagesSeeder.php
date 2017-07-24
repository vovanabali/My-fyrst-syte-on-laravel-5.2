<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('pages')->insert(
            [
                [
                    'name'=>'PlayStation',
                    'alias'=>'about',
                    'text'=>' серия стационарных и портативных консолей от Sony. Первая приставка вышла на рынок 3 декабря 1994 года, последняя — 15 ноября 2013.'
                ]
            ]
        );
    }
}
