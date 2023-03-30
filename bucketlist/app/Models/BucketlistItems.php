<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bucketlist;


class BucketlistItems extends Model
{
    use HasFactory;

    public $table = 'bucketlist_items';

    public function bucketlist()
    {
        return  $this->belongsTo(Bucketlist::class);
    }
}
