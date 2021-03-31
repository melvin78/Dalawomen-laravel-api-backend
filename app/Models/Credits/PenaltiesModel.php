<?php

namespace App\Models\Credits;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenaltiesModel extends Model
{
    use HasFactory;

    public $table='penalties';
    public $primaryKey='idloan_penalty';
    public $timestamps = true;
    protected $guarded=[];



    public function penaltytype(){

        return $this->belongsTo(PenaltyType::class,'penaltytype_id');
    }


    public function latepaymentHost(){

        return $this->hasOne(HostAccountModels::class);
    }
}
