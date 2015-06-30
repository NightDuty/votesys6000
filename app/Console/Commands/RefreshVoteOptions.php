<?php namespace App\Console\Commands;

use Hash;
use App\Http\Models\Voteoption;
use App\Http\Models\Votemember;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class RefreshVoteOptions extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'RefreshVoteOptions';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate new hashes for all votemembers';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$this->info("Generating new hashes");

		$members = Votemember::all();
		if(!$versionnumber = Voteoption::orderBy('created_at', 'desc')->first()->versionnumber +1){
			$versionnumber = 0;
		}
		foreach($members as $member){
			$voteopt = new Voteoption;
			$voteopt->hash = Hash::make(date('Yis') . str_random(20) . date('siY'));
            $voteopt->form_hash = Hash::make(date('Yis') . str_random(20) . date('siY'));
            $voteopt->votemember_id = $member->id;
			$voteopt->versionnumber = $versionnumber;
			$voteopt->save();
		}

		$this->info("Done!");
	}

}
