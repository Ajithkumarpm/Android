<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Alert;
use Auth;

class AuthController extends Controller
{
 public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data=$request->all();  //dd($data);
            $data['password'] = base64_decode($request->password);
            
	        $validator = Validator::make($request->all(), [
	            'email' => 'required|email',
	            'password' => 'required|min:6'
	        ]);
         
	        if ($validator->fails()) {

	            $request->password=base64_decode($request->password);
	             return redirect()->back()->with('errors', 'Email/Password Criteria error!')->withInput();
	        }


            // create our user data for the authentication
            unset($data['remember']);
            unset($data['_token']);


			/*
            if (Auth::guard('android-admin')->attempt([ 'email' => $data['email'], 'password' => $data['password'] ])) {

            	//echo "string"; exit;
    			return redirect()->route('dashboard');
			}*/



          /*  if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])){

            	echo "string"; exit;
            }*/


            

            // attempt to do the login
            if (Auth::attempt($data)) 
            {
              // dd(Auth::User());
                if(Auth::User()->status!=1)
                {
                     Auth::logout();
                     return redirect()->route('login')->with('warning', 'Your account has been suspended.');
                }

                Session::put('lotoken',mt_rand(100000, 999999));
                Session::put('AdminSession', $data['email']);
                //dd(Session::get('AdminSession'));
                $group_id=auth()->user()->user_group_id;


               /* $permission=tbl_users_groups::all()->where('id',$group_id);
                $permission=collect($permission)->sort()->first()->toArray();//dd($permission);
                Session::put('permission_admin', explode("-",$permission['permission_admin']));   
                Session::put('permission_customer', explode("-",$permission['permission_customer']));   
                Session::put('permission_category', explode("-",$permission['permission_category']));   
                Session::put('permission_cusines', explode("-",$permission['permission_cusines']));   
                Session::put('permission_restaurants', explode("-",$permission['permission_restaurants']));   
                Session::put('permission_orders', explode("-",$permission['permission_orders']));   
                Session::put('permission_report', explode("-",$permission['permission_report']));   
                Session::put('permission_site', explode("-",$permission['permission_site']));   
                Session::put('permission_profile', explode("-",$permission['permission_profile'])); 
                Session::put('permission_addon', explode("-",$permission['permission_addon'])); 
                Session::put('permission_bakery', explode("-",$permission['permission_bakery'])); 
                Session::put('permission_meatandfish', explode("-",$permission['permission_meatandfish'])); 
                Session::put('permission_business', explode("-",$permission['permission_business'])); */

                return redirect()->route('dashboard');
            }
            else
            {
               //alertify()->error('this is an error alert (shows red)');
                //alertify()->error('Login Failed! Due to Invalid Username/Password')->delay(10000)->clickToClose()->position('bottom right');
                //alert('Hello World!')->autoclose(3000);
                return back()->with('errors', 'Invalid username/password!');
            }
        }
        else
        {
            return view('auth::login');
        }
    


       
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('auth::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('auth::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('auth::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
