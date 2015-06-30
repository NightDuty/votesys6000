<?php 

use Illuminate\Database\Seeder;
use App\Http\Models\Votemember;

class VoteMemberTableSeeder extends Seeder {

	public function run()
    {
		$votemembers = [
			['votegroup_id' => '1', 'name' => 'Sybrand van Haersma Buma'],
			['votegroup_id' => '1', 'name' => 'Mona Keijzer'],
			['votegroup_id' => '1', 'name' => 'Sander de Rouwe'],
			['votegroup_id' => '2', 'name' => 'Geert Wilders'],
			['votegroup_id' => '2', 'name' => 'Fleur Agema'],
			['votegroup_id' => '2', 'name' => 'Martin Bosma'],
			['votegroup_id' => '3', 'name' => 'Henk Knol'],
			['votegroup_id' => '4', 'name' => 'Diederik Samsom'],
			['votegroup_id' => '4', 'name' => 'Jetta Klijnsma'],
			['votegroup_id' => '4', 'name' => 'Ronald Plasterk'],
			['votegroup_id' => '5', 'name' => 'Mark Rutte'],
			['votegroup_id' => '5', 'name' => 'Edith Schippers'],
			['votegroup_id' => '5', 'name' => 'Stef Blok'],
			['votegroup_id' => '6', 'name' => 'Emile Roemer'],
			['votegroup_id' => '6', 'name' => 'Renske Leijten'],
			['votegroup_id' => '6', 'name' => 'Ronald van Raak'],
			['votegroup_id' => '7', 'name' => 'Jolande Sap'],
			['votegroup_id' => '7', 'name' => 'Bram van Ojik'],
			['votegroup_id' => '7', 'name' => 'Liesbeth van Tongeren'],
			['votegroup_id' => '8', 'name' => 'Alexander Pechtold'],
			['votegroup_id' => '8', 'name' => 'Stientje van Veldhoven'],
			['votegroup_id' => '8', 'name' => 'Wouter Koolmees'],
			['votegroup_id' => '9', 'name' => 'Arie Slob'],
			['votegroup_id' => '9', 'name' => 'Joël Voordewind'],
			['votegroup_id' => '9', 'name' => 'Carola Schouten'],
			['votegroup_id' => '10', 'name' => 'Marianne Thieme'],
			['votegroup_id' => '10', 'name' => 'Esther Ouwehand'],
			['votegroup_id' => '10', 'name' => 'Frank Wassenberg'],
			['votegroup_id' => '11', 'name' => 'Kees van der Staaij'],
			['votegroup_id' => '11', 'name' => 'Elbert Dijkgraaf'],
			['votegroup_id' => '11', 'name' => 'Henk ten Hoeve'],
			['votegroup_id' => '12', 'name' => 'Jabik van der Bij'],
			['votegroup_id' => '12', 'name' => 'Roelof Bisschop']
		];

		Votemember::insert($votemembers);
	}
}