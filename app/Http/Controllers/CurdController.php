<?php

namespace App\Http\Controllers;

use App\Models\curd;
use Session;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CurdController extends Controller
{
   public function showData(){
    // $showData = curd::all();
    // $showData = curd::paginate(5);
    $showData = curd::simplePaginate(5);
    return view('showData', compact('showData'));
   }
   public function addData(){
    return view('add_data');
   }

   public function storeData(Request $request){
    $validated =[
        'name'=>'required|max:20',
        'email'=>'required|email',
    ];
    $this->validate($request, $validated);

    $curd = new curd();
    $curd->name = $request->name;
    $curd->email =$request->email;
    $curd->save();
    flash()->addSuccess('Data has been saved successfully!');
    return redirect('/');
   }
   
   public function edit($id=null){
    // $post = curd::find($id);
    // return($post);
    $editData = curd::find($id);
    return view('edit_data', compact('editData'));
   }

   public function update(Request $request, $id){
    $validated =[
        'name'=>'required|max:20',
        'email'=>'required|email',
    ];
    $this->validate($request, $validated);

    $curd = curd::find($id);
    $curd->name = $request->name;
    $curd->email =$request->email;
    $curd->save();
    flash()->addSuccess('Data has been update successfully!');
    return redirect('/');
   }

   public function delete($id = null){
    $deletePost = curd::find($id);
    $deletePost->delete();
    flash()->addSuccess('Data has been Deleted successfully!');
    return redirect('/');
   }
}
