<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class JobApplication extends Model
{
    protected $guarded = [];

    public function getResumeUrlAttribute(){
        return asset('storage/uploads/resume/'.$this->resume);
    }

    public function job(){
        return $this->belongsTo(Job::class);
    }

	public function user(){
		return $this->belongsTo(User::class);
	}
}
