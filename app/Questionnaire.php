<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Questionnaire extends Model
{
    protected $guarded = [];

    public function user() {
    	return $this->belongsTo(User::class, 'id', 'user_id');
    }

}