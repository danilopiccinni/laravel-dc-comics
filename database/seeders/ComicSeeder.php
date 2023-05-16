<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');

        foreach($arrayComics as $singleComic) {
            $newComics = new Comic();

            $newComics->title = $singleComic['title'];
            $newComics->description = $singleComic['description'];
            $newComics->thumb = $singleComic['thumb'];
            $newComics->price = $singleComic['price'];
            $newComics->series = $singleComic['series'];
            $newComics->sale_date = $singleComic['sale_date'];
            $newComics->type = $singleComic['type'];
            $newComics->artists = json_encode($singleComic['artists']);
            $newComics->writers = json_encode($singleComic['writers']);

            $newComics->save();
        }
    }
}
