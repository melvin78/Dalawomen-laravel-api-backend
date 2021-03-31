<?php

namespace App\Models\Credits;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenaltyType extends Model
{
    use HasFactory;

    public $table='penalty_type';
    public $primaryKey='idpenalty_type';

    public function penalties(){
        return $this->hasMany(PenaltiesModel::class);
    }
}
