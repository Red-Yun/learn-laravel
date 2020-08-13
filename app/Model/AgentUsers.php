<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AgentUsers extends Model
{
    protected $title = '代理商';
	
    protected $table = 'agent_users';
    protected $guarded = ['id'];

    public function assets() {
        return $this->hasOne(AgentAssets::class,'id', 'uid');
    }
    public function recommend() {
        return $this->belongsTo(AgentUser::class,'recommend_id', 'id');
    }
    public function agent() {
        return $this->belongsTo(AgentUser::class, 'agent_id','id');
    }
    public function unit() {
        return $this->belongsTo(AgentUser::class, 'unit_id','id');
    }
    public function center() {
        return $this->belongsTo(AgentUser::class, 'center_id','id');
    }
}
