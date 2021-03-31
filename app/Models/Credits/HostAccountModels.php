<?php

namespace App\Models\Credits;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostAccountModels extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class, 'member_id');
    }

    public function penalties()
    {
        return $this->belongsTo(PenaltiesModel::class, 'penalty_id');
    }
}
