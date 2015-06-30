<?php namespace App\Console\Commands;

use Hash;
use App\Http\Models\User;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class CreateLoginCodes extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'CreateLoginCodes';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate logincodes for Voting System 6000';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$number = $this->ask('how many LoginCodes do you want to create. (int)');

		for ($i=0; $i < $number; $i++) { 
			$votekey = new User;
			$votekey->usernumber = date('Yis') . str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);
			$votekey->password_readable = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
			$votekey->password = Hash::make($votekey->password_readable);
			$votekey->save();
		}
		$this->info("You generated '$number' LoginCodes");
	}

}
