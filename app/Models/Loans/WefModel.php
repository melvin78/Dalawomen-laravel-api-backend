<?php

namespace App\Models\Loans;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WefModel extends Model
{
    use HasFactory;

    public $table='wef';
    public $primaryKey='idwef';
    protected $guarded=[];
    public $timestamps=false;

    public function user(){

        return $this->belongsTo(User::class,'member_id');
    }
    public function loans(){
        return $this->belongsto(LoansAccountModel::class,'loan_id');
    }
}
