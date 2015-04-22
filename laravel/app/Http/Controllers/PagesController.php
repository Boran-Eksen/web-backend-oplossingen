<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use Request;
use App\Todo;
use App\User;
use Input;


class PagesController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function todo(){

		
		
		$id= \Auth::user()->id;
		$final= Todo::where('user_id', $id)->get();

		$done=$final->where('status', 1);
		$notdone=$final->where('status', 0);
		return  view('pages.todos', compact('done','notdone'));

		//$final= array();
		//return view('pages.todos', compact('final'));
	}

	public function home(){


		return view('auth.login');
	}

	public function store(TodoRequest $request){	

		$todo = new Todo($request ->all());
		\Auth::user()->todos()->save($todo);
		
		
		return  redirect('todo');
	}

	public function delete(){
		
		$todo = Request::input('delete');
		$test = Todo::where('id' ,$todo)->delete();
		
		return redirect('todo');
	}

	public function edit(){

		$todo = Request::input('edit');
		$test = Todo::find($todo);
		if($test->status ){
			$test->status = 0;
			$test->save();
		}
		else{
			$test->status = 1;
			$test->save();
		}
		return redirect('todo');
	}




}