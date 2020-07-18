<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
class ArticleController extends Controller
{
    function show(){
         $feedback = DB::table('feedback')->orderBy('id','DESC')->get();
        
      return view('list')->with(compact('feedback'));
          }
   
    function addfeedback(){
    
      return view('add');
        
    }
    function savefeedback(Request $request){
        $validator = Validator:: make($request->all(),[
           'title'=> 'required|max:255',
           'feedback'=>'required',
         'name'=>'required',
            
        ]);
       if($validator->passes()){
           $feedback= new Feedback;
             $feedback->title=$request->title;
              $feedback->feedback=$request->feedback;
              $feedback->name= $request->name;
             $feedback->save();
            $request->session()->flash('msg','Feedback saved successfully');
            return redirect('feedback');
             
       }
       else{
            
            return redirect('feedback/add')->withErrors($validator)->withInput();
        }
      //  dd($request->all());
       
    }
    function editfeedback($id,Request $request)
    {

     $feedback = Feedback::where('id',$id)->first();
          if(!$feedback){
              
              $request->session()->flash("errorMsg",'Record not found');
              return redirect('feedback');  
          }
        return view('edit')->with(compact('feedback'));
    
    }
    function deletefeedback($id, Request $request){
        $feedbac= Feedback::where('id',$id)->first();
        Feedback::where('id',$id)->delete();
        $request->session()->flash('msg','Record has deleted');
        return redirect('feedback');
    
    }
    function updatefeedback($id,Request $request){
         $validator = Validator::make($request->all(),[
           'title'=> 'required|max:255',
           'feedback'=>'required',
         'name'=>'required',
            
        ]);
       if($validator->passes()){
           $feedbac= Feedback::find($id);
             $feedbac->title=$request->title;
              $feedbac->feedback=$request->feedback;
              $feedbac->name= $request->name;
             $feedbac->save();
            $request->session()->flash('msg','Feedback update successfully');
            return redirect('feedback');
             
       }
       else{
            
            return redirect('feedback/edit/'.$id)->withErrors($validator)->withInput();
        }
        
        
    }
    
}
