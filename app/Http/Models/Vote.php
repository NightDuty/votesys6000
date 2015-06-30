<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Voteoption;
use App\Http\Models\Votemember;
use App\Http\Models\Votegroup;
use Storage;

class Vote extends Model{
	protected $connection = 'mysql3';

	protected $table = 'votes';

	protected $fillable = ['name'];

	protected $hidden = [];

	public function voteoption()
    {
        return $this->hasMany('App\Http\Models\Voteoption');
    }

    static function votemembers()
    {
    	$votes = Storage::disk('local')->get('votes.json');
    	$votes = json_decode($votes, true);
    	usort($votes, function($a, $b) {
		    return $b['votes'] - $a['votes'];
		});
    	return $votes;
    }

    static function groupvotes()
    {
        $groupvotes = Storage::disk('local')->get('groupvotes.json');
        $groupvotes = json_decode($groupvotes, true);
        /* usort($groupvotes, function($a, $b) {
            return $b[]['votes'] - $a[]['votes'];
        }); */
        return $groupvotes;
    }

}