<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toDoList extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'to_do_list';
    protected $guarded = [];

}
