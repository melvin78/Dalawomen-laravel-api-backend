<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoansTypeModel extends Model
{
    use HasFactory;

    public $table='loan_type';
    public $primaryKey='idloan_type';

    public function loans(){

        return $this->hasMany(LoansAccountModel::class);
    }


}
