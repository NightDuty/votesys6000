<?php namespace App\Http\Models;

use Auth;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract{
	use Authenticatable;
	protected $connection = 'mysql';

	protected $table = 'votekeys';

	protected $fillable = ['usernumber', 'used', 'password', 'password_readable'];

	protected $hidden = ['password', 'password_readable'];
}