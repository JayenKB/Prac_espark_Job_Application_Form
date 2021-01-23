<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApp;
use Log;

class JobAppController extends Controller
{
    public function index(Request $req)
    {
    	try {
    		$data['jobapp'] = JobApp::get();
    		return view('index')->with($data);
    	} catch (Exception $e) {
    		Log::error($e);	
    	}
    }

	public function view(Request $req,$id)
    {
    	try {
    		$data['jobapp'] = JobApp::find($id);
            return view('view_detail')->with($data);
    	} catch (Exception $e) {
    		Log::error($e);	
    	}
    }    

    public function step_one_create_basic_detail(Request $request)
    {
    	try {
    		$jobapp = $request->session()->get('jobapp');
  
        	return view('create_basic_detail',compact('jobapp'));
    		// return view('create_basic_detail');
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function post_step_one_create_basic_detail(Request $request)
    {
    	try {

    		$validatedData = $request->validate([
	            'first_name' => 'required',
				'last_name' => 'required',
				'email' => 'required',
				'address_1' => 'required',
				'address_2' => 'required',
				'designation' => 'required',
				'phoneno' => 'required',
				'city' => 'required',
				'state' => 'required',
				'gender' => 'required',
				'zip' => 'required',
				'relationship_status' => 'required',
				'dateofbirth' => 'required',
	        ]);

    		if(empty($request->session()->get('jobapp'))){
    			if ($request->id) {
	                $id=$request->id;
	                $jobapp = JobApp::find($id);
	            }else{
	                $jobapp = new JobApp();
	            }
	            $jobapp->fill($validatedData);
	            $request->session()->put('jobapp', $jobapp);
	        }else{
	            $jobapp = $request->session()->get('jobapp');
	            $jobapp->fill($validatedData);
	            $request->session()->put('jobapp', $jobapp);
	        }


			return redirect()->route('step_two_create_education_detail');
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function step_two_create_education_detail(Request $request)
    {
    	try {
    		$jobapp = $request->session()->get('jobapp');
  
        	return view('create_education_detail',compact('jobapp'));
    		// return view('create_basic_detail');
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function post_step_two_create_education_detail(Request $request)
    {
    	try {

    		$validatedData = $request->validate([
	            'ssc_name_of_bord' => 'required',
				'ssc_passing_year' => 'required',
				'ssc_percentage' => 'required',
				'hsc_name_of_bord' => 'required',
				'hsc_passing_year' => 'required',
				'hsc_percentage' => 'required',
				'bechlor_course_name' => 'required',
				'bechlor_university' => 'required',
				'bechlor_passing_year' => 'required',
				'bechlor_percentage' => 'required',
				'master_course_name' => 'required',
				'master_university' => 'required',
				'master_passing_year' => 'required',
				'master_percentage' => 'required',
	        ]);
	  
	        $jobapp = $request->session()->get('jobapp');
	        $jobapp->fill($validatedData);
	        $request->session()->put('jobapp', $jobapp);
	  
	        return redirect()->route('step_three_workexperience_detail');
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function step_three_workexperience_detail(Request $request)
    {
    	try {
    		$jobapp = $request->session()->get('jobapp');
  
        	return view('create_workexperience_detail',compact('jobapp'));
    		// return view('create_basic_detail');
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function post_step_three_workexperience_detail(Request $request)
    {
    	try {

    		$validatedData = $request->validate([
	            'workex_company_name' => 'required',
				'workex_designation' => 'required',
				'from_date' => 'required',
				'to_date' => 'required',
	        ]);
	  
	        $jobapp = $request->session()->get('jobapp');
	        $jobapp->fill($validatedData);
	        $request->session()->put('jobapp', $jobapp);
	  
	        return redirect()->route('step_four_language_known');
	        // return back();
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function step_four_language_known(Request $request)
    {
    	try {
    		$jobapp = $request->session()->get('jobapp');
  
        	return view('create_languagesknown',compact('jobapp'));
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function post_step_four_language_known(Request $request)
    {
    	try {

    		$validatedData = $request->validate([
	            'language_known' => 'required',
	        ]);
	  
	        $jobapp = $request->session()->get('jobapp');
	        $jobapp->fill($validatedData);
	        $request->session()->put('jobapp', $jobapp);
	  
	        return redirect()->route('step_five_technologies_you_know');
	        // return back();
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function step_five_technologies_you_know(Request $request)
    {
    	try {
    		$jobapp = $request->session()->get('jobapp');
  
        	return view('create_technologies_you_know',compact('jobapp'));
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function post_step_five_technologies_you_know(Request $request)
    {
    	try {

    		$validatedData = $request->validate([
	   //          'technologies_you_know' => 'required',
				// 'mysql_technologies_you_know' => 'required',
				// 'laravel_technologies_you_know' => 'required',
				// 'oracle_technologies_you_know' => 'required',
	        ]);
	  
	        $jobapp = $request->session()->get('jobapp');
	        $jobapp->fill($validatedData);
	        $request->session()->put('jobapp', $jobapp);
	  
	        return redirect()->route('step_six_referance_contact');
	        return back();
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function step_six_referance_contact(Request $request)
    {
    	try {
    		$jobapp = $request->session()->get('jobapp');
  
        	return view('create_referance_contact',compact('jobapp'));
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function post_step_six_referance_contact(Request $request)
    {
    	try {

    		$validatedData = $request->validate([
	            'referance_contact_name' => 'required',
				'referance_contact_number' => 'required',
				'referance_contact_relation' => 'required'
	        ]);
	  
	        $jobapp = $request->session()->get('jobapp');
	        $jobapp->fill($validatedData);
	        $request->session()->put('jobapp', $jobapp);
	  
	        return redirect()->route('step_seven_preferances');
	        // return back();
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function step_seven_preferances(Request $request)
    {
    	try {
    		$jobapp = $request->session()->get('jobapp');
  
        	return view('create_preferances',compact('jobapp'));
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function post_step_seven_preferances(Request $request)
    {
    	try {

    		$validatedData = $request->validate([
	            'preferances_preferd_location' => 'required',
				'preferances_notice_period' => 'required',
				'preferances_expacted_CTC' => 'required',
				'preferances_current_CTC' => 'required',
				'preferances_department' => 'required',
	        ]);

	        // $product = $request->session()->get('product');
	        $jobapp = $request->session()->get('jobapp');
	        $jobapp->fill($validatedData);
	        $jobapp->save();
	  
	        $request->session()->forget('jobapp');
	        // $request->session()->put('jobapp', $jobapp);
	  		
	  		if ($request->id) {
	  			return redirect()->route('home')->with('success','Job application updated successfully...');
	  		}else{
	        	return redirect()->route('home')->with('success','Job application added successfully...');
	  		}
	  
    	} catch (Exception $e) {
    		Log::error($e);
    	}
    }

    public function edit($id)
    {	
        try {
            $data['jobapp'] = JobApp::find($id);
            return view('create_basic_detail')->with($data);

        } catch (Exception $e) {
            Log::error($e);
        }
    }

    public function delete($id)
    {
        try {
            $jobapp = JobApp::find($id);
            $jobapp->delete();
            return back()->with('success','Deleted Successfully!');
        } catch (Exception $e) {
            Log::error($e);
        }
    }
}
