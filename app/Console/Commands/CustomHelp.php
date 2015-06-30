<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class CustomHelp extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'CustomHelp';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Help command for CustomCommands';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$this->info("-CreateLoginCodes <- This will generate logincodes");
		$this->info("-RefreshVoteOptions <- This will generate new hashes for voting members");
		$this->info("-CountVotes <- This will count and generate a votes.json");
	}

}
