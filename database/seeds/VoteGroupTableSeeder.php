<?php 

use Illuminate\Database\Seeder;
use App\Http\Models\Votegroup;

class VoteGroupTableSeeder extends Seeder {

	public function run()
    {
		$votegroups = [
			['id' => 1,'name' => 'CDA'],
			['id' => 2,'name' => 'PVV'],
			['id' => 3,'name' => '50PLUS'],
			['id' => 4,'name' => 'PvdA'],
			['id' => 5,'name' => 'VVD'],
			['id' => 6,'name' => 'SP'],
			['id' => 7,'name' => 'GroenLinks'],
			['id' => 8,'name' => 'D66'],
			['id' => 9,'name' => 'ChristenUnie'],
			['id' => 10,'name' => 'Partij voor de Dieren'],
			['id' => 11,'name' => 'SGP'],
			['id' => 12,'name' => 'OSF']

		];

		Votegroup::insert($votegroups);
	}
}