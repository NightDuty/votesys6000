<?php namespace App\Http\Controllers;

use Request;
use App\Http\Models\Voteoption;
use App\Http\Models\Vote;
use App\Http\Models\Votegroup;

class VoteController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getindex()
	{
		//$number = Voteoption::orderBy('created_at', 'desc')->first()->versionnumber;
		$options = Votegroup::all();
		return view('voting')->with('options', $options);
	}

	public function postindex()
	{
		$request = Request::input('voteoption');
		$number = Voteoption::orderBy('created_at', 'desc')->first()->versionnumber;
		$check = Voteoption::where('form_hash', $request)->first();
		if($number != $check->versionnumber){
			return view('voting')->with('errors', ['Er is een fout opgetreden. Probeer het opnieuw. code: h4cx']);
		}
		$vote = new Vote;

		$vote->voteoption_hash = $check->hash;
		$vote->ip = $_SERVER['REMOTE_ADDR'];
		$vote->save();
		return redirect('voted');
	}
}
