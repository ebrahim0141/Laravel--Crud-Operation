<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class aboutController extends Controller
{
    
    public function AllContact()
    {

    	$contact=DB::table('contacts')->get();
    	
    	return view('pages.allcontact')->with('showdata',$contact);
    }

    public function InsertData(){

    	return view('pages.insert');
    }

    public function DataAdded(Request $request)
    {
        $data= array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $ins=DB::table('contacts')->insert($data);
        
        return Redirect()->route('all.contacts');
    }

    public function Delete($id)
    {
        $dlt=DB::table('contacts')->where('id',$id)->delete();
        return Redirect()->route('all.contacts');
    }

        public function Edit($id){

        $edit=DB::table('contacts')->where('id',$id)->first();
        return view('pages.edit',compact('edit'));

    }
    
    public function Update(Request $request,$id)
    {
        $data= array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $upd=DB::table('contacts')->where('id',$id)->Update($data);
        
        return Redirect()->route('all.contacts');
    }

    public function View($id)
    {

        $view=DB::table('contacts')->where('id',$id)->first();
        return view('pages.view',compact('view'));
    }

}
        
