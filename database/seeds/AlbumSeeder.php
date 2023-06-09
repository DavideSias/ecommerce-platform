<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            [
                'item_id' => 1,
                'photo' => 'https://picsum.photos/id/1/200/300',
            ],
            [
                'item_id' => 1,
                'photo' => 'https://picsum.photos/id/2/200/300',
            ],
            [
                'item_id' => 1,
                'photo' => 'https://picsum.photos/id/3/200/300',
            ],
            [
                'item_id' => 2,
                'photo' => 'https://picsum.photos/id/4/200/300',
            ],
            [
                'item_id' => 2,
                'photo' => 'https://picsum.photos/id/5/200/300',
            ],
            [
                'item_id' => 2,
                'photo' => 'https://picsum.photos/id/6/200/300',
            ],
            [
                'item_id' => 3,
                'photo' => 'https://picsum.photos/id/7/200/300',
            ],
            [
                'item_id' => 3,
                'photo' => 'https://picsum.photos/id/8/200/300',
            ],
            [
                'item_id' => 3,
                'photo' => 'https://picsum.photos/id/9/200/300',
            ],
            [
                'item_id' => 4,
                'photo' => 'https://picsum.photos/id/10/200/300',
            ],
            [
                'item_id' => 4,
                'photo' => 'https://picsum.photos/id/11/200/300',
            ],
            [
                'item_id' => 4,
                'photo' => 'https://picsum.photos/id/12/200/300',
            ],
            [
                'item_id' => 5,
                'photo' => 'https://picsum.photos/id/13/200/300',
            ],
            [
                'item_id' => 5,
                'photo' => 'https://picsum.photos/id/14/200/300',
            ],
            [
                'item_id' => 5,
                'photo' => 'https://picsum.photos/id/15/200/300',
            ],
            [
                'item_id' => 6,
                'photo' => 'https://picsum.photos/id/16/200/300',
            ],
            [
                'item_id' => 6,
                'photo' => 'https://picsum.photos/id/17/200/300',
            ],
            [
                'item_id' => 6,
                'photo' => 'https://picsum.photos/id/18/200/300',
            ],
            [
                'item_id' => 7,
                'photo' => 'https://picsum.photos/id/19/200/300',
            ],
            [
                'item_id' => 7,
                'photo' => 'https://picsum.photos/id/20/200/300',
            ],
            [
                'item_id' => 7,
                'photo' => 'https://picsum.photos/id/21/200/300',
            ],
            [
                'item_id' => 8,
                'photo' => 'https://picsum.photos/id/22/200/300',
            ],
            [
                'item_id' => 8,
                'photo' => 'https://picsum.photos/id/23/200/300',
            ],
            [
                'item_id' => 8,
                'photo' => 'https://picsum.photos/id/24/200/300',
            ],
        ];
        foreach($albums as $album){
            DB::table('albums')->insert($album);
        }
    }
}
