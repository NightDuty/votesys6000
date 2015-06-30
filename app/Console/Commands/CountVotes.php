<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Http\Models\Voteoption;
use App\Http\Models\Votemember;
use App\Http\Models\Votegroup;
use App\Http\Models\Vote;
use Storage;

class CountVotes extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'CountVotes';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'This will count and generate a votes.json';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$voteoptions = Voteoption::all();
    	$votes = Vote::all();
    	$members = Votemember::all();
    	$groups = Votegroup::all();
    	$score = [];
    	foreach($votes as $vote)
        {
    		foreach($voteoptions as $voteoption)
            {
    			if($vote['voteoption_hash'] == $voteoption['hash'])
                {
    				$score[] = $voteoption['votemember_id'];
    			}
    		}
    	}
    	$score = array_count_values($score);
    	foreach($score as $key => $vote)
        {
    		foreach($members as $member)
            {
    			if($member['id'] == $key)
                {
    				$member['votes'] = $vote;
    			}
    			foreach($groups as $group)
                {
    				if($group['id'] == $member['votegroup_id'])
                    {
    					$member['group'] = $group['name'];
    				}
    			}
    		}
    		foreach($members as $member)
            {
    			if(!isset($member['votes']))
                {
                    $member['votes'] = 0;
    			}
    		}
    	}
    	Storage::disk('local')->put('votes.json', json_encode($members));

        $groups = $members;

        $groupscore = [];
        foreach($groups as $group)
        {
            if(isset($groupscore[$group['group']]))
            {
                $groupscore[$group['group']]['votes'] = $groupscore[$group['group']]['votes'] + $group['votes'];
            }
            else
            {
                $rand = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];
                $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
                $groupscore[$group['group']] = ['votes' => $group['votes'], 'color' => $color];
            }
        }
        $totalvotes = Vote::count();
        foreach($groupscore as $key => $group)
        {
            $groupscore[$key]['cut'] = $groupscore[$key]['votes'] / $totalvotes * 100;
        }
        Storage::disk('local')->put('groupvotes.json', json_encode($groupscore));
		$this->info("All votes are counted and saved in votes.json");
	}

}
