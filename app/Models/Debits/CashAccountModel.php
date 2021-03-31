<?php

namespace App\Models\Debits;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashAccountModel extends Model
{
    use HasFactory;

    public $table = 'cash_account';
    public $primaryKey= 'idcash_account';
    public $timestamps = true;

    public function users(){

        return $this->belongsTo(User::class,'member_id');
    }

}
