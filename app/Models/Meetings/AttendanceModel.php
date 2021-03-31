<?php

namespace App\Models\Meetings;



use App\Models\User;
use App\Traits\MeetingMissed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    use HasFactory,MeetingMissed;

    public $primaryKey='idabsent';
    public $table='absent';
    public $timestamps=false;
    protected $guarded=[];

    public function meeting(){
        return $this->belongsTo(MeetingsModel::class,'meeting_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'member_id');
    }



}
