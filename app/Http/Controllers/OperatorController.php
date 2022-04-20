<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use Illuminate\Support\Facades\File;

class OperatorController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Show Edit Profile    
        $operator = Operator::all();
        return view('operators.index', compact('operator'));
      
   }

   public function create()
   {

     
       return view('operators.create');
     
  }


  
  public function store(Request $request)
  {

      $operator = new Operator;
      $operator->operator_name = $request->input('operator_name');
      $operator->address = $request->input('address');
      $operator->contact_no = $request->input('contact_no');
     
      if($request->hasFile('profile_image')){

        $file = $request->file('profile_image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'. $extention;
        $file->move('images/operatorsavatar/', $filename);
        $operator->profile_image = $filename;
      
      }

      $operator->save();
   
     
      return redirect()->back()->with('status', 'Operator Added Successfully!');
    
 }
        public function edit($id){
            $operator = Operator::find($id);
            return view('operators.edit', compact('operator'));
        }

         public function update(Request $request, $id){
            $operator = Operator::find($id);
            $operator->operator_name = $request->input('operator_name');
            $operator->address = $request->input('address');
            $operator->contact_no = $request->input('contact_no');
           
            if($request->hasFile('profile_image')){
      
              $destination = 'images/operatorsavatar/'.$operator->profile_image;
              if(File::exists($destination)){
                  File::delete($destination);
              }
              $file = $request->file('profile_image');
              $extention = $file->getClientOriginalExtension();
              $filename = time().'.'. $extention;
              $file->move('images/operatorsavatar/', $filename);
              $operator->profile_image = $filename;
            
            }
      
            $operator->update();
            return redirect()->back()->with('status', 'Operator Updated Successfully!');
          
         }

         public function destroy($id){
              $operator = Operator::find($id);
              $destination = 'images/operatorsavatar/'.$operator->profile_image;
               if(File::exists($destination)){
                   File::delete($destination);
               }
              $operator->delete();
              return redirect()->back()->with('status', 'Operator Deleted Successfully!');
         }

}
