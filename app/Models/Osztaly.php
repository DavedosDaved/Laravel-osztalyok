<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Osztaly extends Model
{
    protected $table = 'osztalyok';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function osztalyok()
    {
        return $this->hasMany(Diak::class);
    }
}