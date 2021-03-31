<?php

namespace App\Models\Meetings;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostsModel extends Model
{
    use HasFactory;

    public $primaryKey = 'idhost';
    public $table = 'host';
    protected $guarded=[];

    public function meeting()
    {
        return $this->hasMany(MeetingsModel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'member_id');
    }
}
