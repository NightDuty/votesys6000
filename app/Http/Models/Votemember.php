<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Votegroup;
use App\Http\Models\Voteoption;

class Votemember extends Model{


	protected $connection = 'mysql2';

	protected $table = 'votemembers';

	protected $fillable = ['name', 'votegroup_id', 'hash'];

	protected $hidden = [];

	public function voteoptions()
    {
        return $this->hasMany('App\Http\Models\Voteoption');
    }

    static function gethash($id){
    	$number = Voteoption::orderBy('created_at', 'desc')->first()->versionnumber;
    	return Voteoption::where('versionnumber', $number)->where('votemember_id', $id)->first()->form_hash;
    }
}