<?php namespace App\Http\Models;

use Hash;
use Illuminate\Database\Eloquent\Model;

class Voteoption extends Model{


	protected $connection = 'mysql2';

	protected $table = 'voteoptions';

	protected $fillable = ['votemember_id', 'hash'];

	protected $hidden = [];

}