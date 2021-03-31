<?php

namespace App\Models\Loans;



use App\Traits\LoanEvent;
use App\Traits\UpdateLoanApprovalDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LoansAccountModel extends Model
{
    use HasFactory, LoanEvent,UpdateLoanApprovalDate,Notifiable;
    public $guarded=[];

    public $primaryKey='idloans';
    public $timestamps='true';
    public $table ='loans';


    public function loans(){

        return $this->belongsTo(LoansTypeModel::class,'loantype_id');
   }

   public function cooploan(){

       return $this->hasOne(CoopLoanModel::class,'loan_id');
   }

   public function emergency(){

       return $this->hasOne(EmergencyModelAccount::class,'loan_id');
   }

   public function wefloan(){

       return $this->hasOne(WefModel::class,'loan_id');

   }
   public function welfare(){
       return $this->hasOne(WelfareModel::class,'loan_id');
   }
}
