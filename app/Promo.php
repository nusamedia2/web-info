<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = "promos";

    protected $fillable = ['judul', 'file', 'keterangan'];
}
