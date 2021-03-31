<?php

namespace App\Models\Debits;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccountModels extends Model
{
    use HasFactory;

    public $table = 'bank_account';
    public $primaryKey= 'idbank_account';
    public $timestamps = true;

    public function user(){

        return $this->belongsTo(User::class,'member_id');
    }

}
