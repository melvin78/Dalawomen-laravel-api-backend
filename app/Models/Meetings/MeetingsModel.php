<?php

namespace App\Models\Meetings;


use App\Traits\MeetingMissed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingsModel extends Model
{
    use HasFactory;

    public $table = 'meeting';
    public $primaryKey = 'idmeeting';
    protected $guarded = [];

    public function hosts()
    {

        return $this->belongsTo(HostsModel::class, 'hostid');
    }

    public function meetings()
    {
///relationship to define user can only be absent for one meeting
        return $this->hasMany(AttendanceModel::class);
    }


}
