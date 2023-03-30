<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BucketlistItems;

class Bucketlist extends Model
{
    use HasFactory;

    public $table = 'bucketlist';

    public function bucketlist_items()
    {
        return $this->hasMany(BucketlistItems::class);
    }
}
