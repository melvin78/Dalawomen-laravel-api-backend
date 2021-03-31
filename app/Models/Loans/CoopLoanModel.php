<?php

namespace App\Models\Loans;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoopLoanModel extends Model
{
    use HasFactory;

    public $table='cop_loan';
    public $primaryKey='idcop_loan';
    public $guarded=[];
    public $timestamps=false;

    public function user(){

        return $this->belongsTo(User::class,'member_id');
    }

    public function loans()
    {
        return $this->belongsTo(LoansAccountModel::class,'loan_id');
    }
}
