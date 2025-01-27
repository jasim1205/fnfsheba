<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Authentication\SignupRequest;
use App\Http\Requests\Authentication\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthenticationController extends Controller
{
    public function signUpForm(){
        return view('authentication.register');
    }

    public function signUpStore(SignupRequest $request){
        //dd($request);
        try{
            $user=new User;
            $user->name=$request->FullName;
            $user->contact_no=$request->contact_no;
            $user->email=$request->EmailAddress;
            $user->password=Hash::make($request->password);
            $user->status=0;
            $user->role_id=2;
            if($user->save()){
                $this->notice::success('Successfully Registered');
                return redirect('login');
            }else
                $this->notice::error('something wrong! Please try again');
                return redirect('login');
        }catch(Exception $e){
            dd($e);
            $this->notice::error('something wrong! Please try again');
            return redirect('login');
        }

    }

    public function signInForm(){
        return view('authentication.login');
    }

    public function signInCheck(SigninRequest $request){
        try{
             $user = User::where('contact_no', $request->username)
                    ->orWhere('email', $request->username)
                    ->first();

        if ($user) {
            if ($user->status == 1) {
                if (Hash::check($request->password, $user->password)) {
                    $this->setSession($user);

                    // Check if the current user's role is 'employee'
                    if (currentUser() === 'employee') {
                        $this->notice::success('Successfully Login');
                        return redirect()->route('employee.dashboard'); // Redirect to employee dashboard
                    } else {
                        $this->notice::success('Successfully Login');
                        return redirect()->route('dashboard'); // Redirect to default dashboard
                    }
                } else {
                    $this->notice::error('Your User name or password is wrong!');
                    return redirect()->route('login');
                }
            } else {
                $this->notice::error('You are not an active user. Please contact the administrator.');
                return redirect()->route('login');
            }
        } else {
            $this->notice::error('Your User name or password is wrong!');
            return redirect()->route('login');
        }
    } catch (Exception $e) {
        dd($e);
        $this->notice::error('Your User name or password is wrong!');
        return redirect()->route('login');
    }
}

    public function setSession($user){
        return request()->session()->put([
                'userId'=>encryptor('encrypt',$user->id),
                'userName'=>encryptor('encrypt',$user->name),
                'role_id'=>encryptor('encrypt',$user->role_id),
                'empID'=>encryptor('encrypt',$user->employee_id),
                'accessType'=>encryptor('encrypt',$user->full_access),
                'role'=>encryptor('encrypt',$user->role->name),
                'roleIdentity'=>encryptor('encrypt',$user->role->identity),
                'image'=>$user->image ?? 'no-image.png'
            ]
        );
    }

    public function signOut(){
        request()->session()->flush();
        $this->notice::error('Successfully Logged Out!');
        return redirect()->route('login');
    }
}
