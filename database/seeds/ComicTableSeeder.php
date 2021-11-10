<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {
            $newComic = new Comic();
            $newComic->title;
            $newComic->description;
            $newComic->thumb;
            $newComic->price;
            $newComic->series;
            $newComic->sale_date;
            $newComic->type;
            $newComic->save();
        }
    }
}
