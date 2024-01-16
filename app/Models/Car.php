<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'cars';

    protected $fillable = ['name', 'horsepower', 'gasoline', 'year', 'odometer', 'cylinder', 'transmission', 'price','manufactures_id','typemodels_id'];

    public function manufacture() {
        return $this->belongsTo(Manufacture::class, 'manufactures_id', 'id');
    }
    public function typemodels() {
        return $this->belongsTo(TypeModel::class, 'typemodels_id', 'id');
    }
}
