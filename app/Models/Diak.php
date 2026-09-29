<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diak extends Model
{
    protected $table = 'diakok';

    protected $fillable = ['osztaly_id', 'name'];
    
    public $timestamps = false;


    public function osztaly()
    {
        return $this->belongsTo(Osztaly::class);
    }
}