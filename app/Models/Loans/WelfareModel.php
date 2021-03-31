<?php

namespace App\Models\Loans;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfareModel extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;
    public $primaryKey='idwelfare';
    public $table='welfare';
    public function user(){

        return $this->belongsTo(User::class,'member_id');
    }

    public function loans(){
        return $this->belongsTo(LoansAccountModel::class,'loan_id');
    }
}
