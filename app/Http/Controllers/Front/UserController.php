<?php

namespace App\Http\Controllers\Front;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:user')->except(['logout','update_view','update']);
    }


    public function index(){
        return view('front.auth.login');
    }

    public function loginPost(Request $request){
        //validation
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required|max:16',
        ]);
        //login
        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }
        $credentials = $request->only('email','password');

        if(! Auth::guard('user')->attempt($credentials)){
            return back()
                    ->withErrors(['message' => 'Wrong credentials please try again']) 
                    ->withInput(); 
        }
        //session
        session()->flash('msg','You have login');
        //redirect
        return redirect('/');
    }

    public function registerPost(Request $request){
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'birthdate' => 'required',
            'address' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8|max:16',
            'repassword' => 'required|required_with:password|same:password|min:8|max:16',
        ]);
        //login
        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = new User;
        $user->name = $request->name;
        $user->birthdate = $request->birthdate;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->image = "placeholder.webp";
        $user->password = bcrypt($request->password);

        $user->save();
        //session
        session()->flash('msg',$request->name);
        //redirect
        return redirect('/login');
    }

    public function register(){
        //return view index
        return view('front.auth.register');
    }

    public function logout(){
        auth()->guard('user')->logout();
        return redirect('/');
    }

    public function update_view(){
        return view('front.auth.profileEdit');
    }

    public function update(Request $request){
       //find id
       $id = Auth::guard('user')->user()->id;
       $user = User::find($id);

        //validate data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'birthdate' => 'required',
            'address' => 'required|max:255',
            'gender' => 'required',
            'password' => 'required|min:8|max:16',
        ]);

        // if(bcrypt($validatedData['password']) != Auth::guard('user')->user()->password){
        //     //return with error
            
        //     return back()->withErrors('password', 'wrong password');
        // }

        //update image
        if($request->hasFile('image')){
            
            if(file_exists(public_path('uploads/').$user->image)){
                unlink(public_path('uploads/').$user->image);
            }

            $image = $request->profilephoto;
            $image->move('uploads',$image->getClientOriginalName());
            $user->image = $request->image->getClientOriginalName(); 
        }

        $user->update([
            'name'=>$request->name,
            'birthdate'=>$request->birthdate,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'image'=>$user->image

        ]);

        //session

        //redirect
        return redirect('/edit');
    }
}
