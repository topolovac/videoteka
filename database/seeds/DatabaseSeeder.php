<?php

use Illuminate\Database\Seeder;
use App\models\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call('GenreTableSeeder');

      $this->command->info('User table seeded!');
    }
}

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $genres = array(
        'Action',
        'Adventure',
        'Comedy',
        'Crime',
        'Drama',
        'Fantasy',
        'Historical',
        'Historical fiction',
        'Horror',
        'Magical realism',
        'Mystery',
        'Paranoid Fiction',
        'Philosophical',
        'Political',
        'Romance',
        'Saga',
        'Satire',
        'Science fiction',
        'Social',
        'Speculative',
        'Thriller',
        'Urban',
        'Western'
      );

      foreach ($genres as $key) {
        Genre::create(['name' => $key]);
      }
    }
}
