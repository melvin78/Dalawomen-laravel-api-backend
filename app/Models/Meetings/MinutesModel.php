<?php

namespace App\Models\Meetings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinutesModel extends Model
{
    use HasFactory;

    public $table='minutes';
    public $primaryKey='idminutes';

    public function meeting(){
        return $this->hasOne(MeetingsModel::class, );
    }
}
