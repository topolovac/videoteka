<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'genre_id', 'image', 'year', 'runtime'];

    public function saveMovie($data){
      return $this->create($data);
    }

    public function genre(){
    return $this->belongsTo('App\models\Genre');
  }
}
