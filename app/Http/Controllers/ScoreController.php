<?php namespace App\Http\Controllers;

use App\Http\Models\Voteoption;
use App\Http\Models\Vote;
use App\Http\Models\Votegroup;

class ScoreController extends Controller {

	public function getscore()
	{
		$score = [];
		$score = Vote::votemembers();
		$groupvotes = Vote::groupvotes();

		/* TESTING CODE 
		$groupscore = [];
		foreach($groups as $group)
		{
			if(isset($groupscore[$group['group']]))
			{
				$groupscore[$group['group']]['votes'] = $groupscore[$group['group']]['votes'] + $group['votes'];
			}
			else
			{
				$groupscore[] = $group['group'];
				$groupscore[$group['group']]['votes'] = $group['votes'];
			}
		} */
		return view('score')->with('members', $score)->with('groupvotes', $groupvotes);
	}

}