<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'url_thumbnail', 'hearts', 'views', 'status', 'index'
    ];

    protected $primaryKey = 'id';
    protected $table = 'collection';
}
