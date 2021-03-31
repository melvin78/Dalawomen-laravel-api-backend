<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingLoanApproval extends Model
{
    use HasFactory;


    protected $table='members_needing_loans';


}
