<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Votegroup extends Model{
	protected $connection = 'mysql2';

	protected $table = 'votegroups';

	protected $fillable = ['name'];

	protected $hidden = [];

	public function votemembers()
    {
        return $this->hasMany('App\Http\Models\Votemember');
    }

}