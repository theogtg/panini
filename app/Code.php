<?php

namespace App;


class Code extends Model
{

	public function user(){

		return $this->belongsTo(User::class);

	}

}
