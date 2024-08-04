<?php

namespace Mahdialikhani\Smsir\models;

use Illuminate\Database\Eloquent\Model;

class SmsirlaravelLog extends Model
{
	protected $guarded = [];

	public function sendStatus() {
		if($this->status){
			return '<i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i>';
		}
		
		return '<i class="fa fa-exclamation-circle" aria-hidden="true" style="color: red"></i>';
		
	}
}
