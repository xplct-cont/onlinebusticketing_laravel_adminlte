<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\MOdels\Buses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Logs;
use Illuminate\Support\Facades\Validator;
use Flash;
use Response;


class UsersController extends Controller {
  
    public $successStatus = 200;

    public function login(){
        if (Auth::attempt(['username'=> request('username'), 'password' => request('password')])){
              $user = Auth::user();
  
              $success['token'] = Str::random(64);
              $success['username'] = $user->username;
              $success['id'] = $user->id;
              $success['name'] = $user->name;
  
              // SAVE THE TOKEN
              $user->remember_token = $success['token'];
              $user->save();
              return response()->json($success, $this->successStatus);

            
        } else {
            return response()->json(['response' => 'User not found'], 404);
        }

        }
    

public function register(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ]);


    //Validatiing the Request
    if ($validator->fails()) {
        return response()->json(['response' => $validator->errors()], 401);
    } else {
        $input = $request->all();

        if (User::where('email', $input['email'])->exists()) {
            return response()->json(['response' => 'Email already exists'], 401);
        } elseif(User::where('username', $input['username'])->exists()) {
            return response()->json(['response' => 'Username already exists'], 401);
        } else {
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            $success['token'] = Str::random(64);
            $success['username'] = $user->username;
            $success['id'] = $user->id;
            $success['name'] = $user->name;

            return response()->json($success, $this->successStatus);
        }
      }

    }


    //bus bookings registration
    public function bookings(Request $request) {
        $validator = Validator::make($request->all(), [
            'operator' => 'required',
            'bus_name' => 'required',
            'point_of_origin' => 'required',
            'start_time' => 'required',
            'destination' => 'required',
            'drop_time' => 'required',
            'ticket_no' => 'required',
            'passenger_name' => 'required',
            'age' => 'required',
            'contact_no' => 'required',
           
        ]);
    
        if ($validator->fails()) {
            return response()->json(['response' => $validator->errors()], 401);
      
        } else {
            $input = $request->all();
    
        if(Bookings::where('ticket_no', $input['ticket_no'])->exists()) {
            return response()->json(['response' => 'Ticket Number is Invalid'], 401);
        }else{
                $bookings = Bookings::create($input);

                $success['operator'] = $bookings->operator;
                $success['bus_name'] = $bookings->bus_name;
                $success['point_of_origin'] = $bookings->point_of_origin;
                $success['start_time'] = $bookings->start_time;
                $success['destination'] = $bookings->destination;
                $success['drop_time'] = $bookings->drop_time;
                $success['ticket_no'] = $bookings->ticket_no;
                $success['passenger_name'] = $bookings->passenger_name;
                $success['age'] = $bookings->age;
                $success['contact_no'] = $bookings->contact_no;
    
    
                return response()->json($success, $this->successStatus);
            }
        }
    
    }



      //bus names/operators/etc
      public function buslist(Request $request) {
        $validator = Validator::make($request->all(), [
            'bus_name' => 'required',
            'maximum_seats' => 'required',
            'plate_no' => 'required',
            'franchise_no' => 'required',
           
        ]);
    
        if ($validator->fails()) {
            return response()->json(['response' => $validator->errors()], 401);
      
        } else {
            $input = $request->all();
    
        if(Buses::where('plate_no', $input['plate_no'])->exists()) {
            return response()->json(['response' => 'Plate Number is Invalid'], 401);
        }else{
                $buses = Buses::create($input);
    
                $success['bus_name'] = $buses->bus_name;
                $success['maximum_seats'] = $buses->maximum_seats;
                $success['plate_no'] = $buses->plate_no;
                $success['franchise_no'] = $buses->franchise_no;
            
    
                return response()->json($success, $this->successStatus);
            }
        }
    
    }
    
    
    
    public function resetPassword(Request $request) {
        $user = User::where('email', $request['email'])->first();
    
        if ($user != null) {
            $user->password = bcrypt($request['password']);
            $user->save();
    
            return response()->json(['response' => 'User has successfully resetted his/her password'], $this->successStatus);
        } else {
            return response()->json(['response' => 'User not found'], 404);
        }
      }
      
    }
    
    
?>