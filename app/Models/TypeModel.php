<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'typemodel';
    protected $fillable = ['model'];

    // public function manufacture()
    // {
    //     return $this->belongsTo(Manufacture::class, 'manufacture_id');
    // }
}
