<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Validator;


class TodoController extends Controller
{
   public function index(){
      $todos = Todo::all();
      return view('index',['todos'=>$todos]);
   }




   public function store(Request $request){
//       return $request->all();
       	$validator = Validator::make(
			request()->all(),
			[
				'task'     => 'required|min:8|max:50',
			],
			[],
			[]
		);

		if ($validator->fails()) {
			$errors = collect($validator->errors())->flatten(1);
			foreach ($errors as $error) {
				toastr()->warning($error,'Error');
			}
			return back()->withInput();
        }
        $data =  $validator->validated();



		Todo::create($data);

		toastr()->success('Created Success', trans('Success Process'));
		return redirect('/');
   }
   public function update($id){
           $todo = Todo::findOrFail($id);
           $todo->update(['status'=>'finished']);
       toastr()->success('Status Update Success', trans('Success Process'));
       return redirect('/');
   }
   public function delete($id){
       $todo = Todo::findOrFail($id);
       $todo->delete();
       toastr()->success('Deleted Success', trans('Success Process'));
       return redirect('/');

   }
}
