<?php

use Illuminate\Database\Seeder;
use App\models\Genre;
use App\models\Movie;


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

      $this->call('MoviesTableSeeder');
      $this->command->info('Movies table seeded!');
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

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $movies = array(
        array('Antitrust','5','2001','110','1532687910.jpg'),
        array('Firewall','1','2006','105','1532687968.jpg'),
        array('Hackers','5','1995','107','1532688018.jpg'),
        array('Operation Swordfish','21','2001','99','1532688084.jpg'),
        array('Operation Takedown','21','2000','92','1532688162.jpg'),
        array('Pirates of Silicon Valley','5','1999','97','1532688221.jpg'),
        array('The social network','5','2010','121','1532688286.jpg'),
        array('Tron','18','1982','96','1532688352.jpg'),
        array('Tron Legacy','18','2010','127','1532688395.jpg'),
        array('War games','18','1983','114','1532688444.jpg')
      );

      foreach ($movies as $movie) {
        $data = array(
          'title' => $movie[0],
          'genre_id' => $movie[1],
          'year' => $movie[2],
          'runtime' => $movie[3],
          'image' => $movie[4]
        );

        Movie::create($data);
      }
    }
}
