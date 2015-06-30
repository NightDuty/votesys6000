<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Database\seeds\VoteGroupTableSeeder;
use Database\seeds\VoteMemberTableSeeder;
use App\Http\Models\Voteoption;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('VoteGroupTableSeeder');
		$this->call('VoteMemberTableSeeder');
		Voteoption::create(['versionnumber' => '0', 'hash' => '-', 'votemember_id' => '0']);
		
	}

}
