<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddtestiController extends Controller
{
   public function addtestimonial()
   {
   		return view('admin.addtestimonial');

   }

   public function addtesti(Request $request)
   {
   		$this->validate($request, [
            'client_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   		  $image = $request->file('client_image');
        $input['client_image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['client_image']);

    
     		$cname=$request->input('client_name');
      	$cemail=$request->input('client_email');
      	$curl=$request->input('client_url');
      	
      	$cmessage=$request->input('client_message');
      	$date=date("Y/m/d");

      	$data=array('client_name'=>$cname,'client_email'=>$cemail,'client_url'=>$curl,'client_image'=> $input['client_image'],'client_message'=>$cmessage,'created_at'=>$date);	
      	DB::table('testimonials')->insert($data);

      	return redirect()->back()->with('success', 'Yeah!! Testimonial has been successfully submitted');

   }

   public function viewtestimonials()
   {
   		$testimonials=DB::table('testimonials')->get();

   		return view('admin.viewtestimonial')->with('data',$testimonials);

   }

   public function destroy($id)
   {

   		DB::table("testimonials")->delete($id);
        return redirect()->back()->with('info','Testimonial Deleted');
   }

    public function edit($id)
    {

    	$testimonials= DB::table('testimonials')->where('id',$id)->get();
        return view('admin.editestimonial')->with('data',$testimonials);;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'client_name' => 'required',
            'client_email' => 'required',
            'client_url' => 'required',
            'client_image' => 'required',
            'client_message' => 'required',
        ]);

        $image = $request->file('client_image');
        $input['client_image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['client_image']);


        DB::table('testimonials')->where('id',$id)->update(array('client_name'=>$request->input('client_name'),'client_url'=>$request->input('client_url'),'client_image'=>$input['client_image'],'client_message'=>$request->input('client_message')));
        return redirect()->back()->with('info','Testimonial updated successfully');
    }

}
