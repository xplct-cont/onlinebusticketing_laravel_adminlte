<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bookings;
use DB;
use DateTime;

class HomeController extends Controller
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
     
        //Count Data from Database

        $booking = DB::table('bookings')->count();
        $bus = DB::table('buses')->count();



          //For Charts and Gaphs

        $post = DB::table('buses')->get('*')->toArray();
        foreach($post as $row){
            $data[] = array
            (
                'label'=>$row->bus_name,
                'y'=>$row->maximum_seats
            );
        }  

              //for bus operators
              $admins = User::all();
        return view('home', compact('booking', 'bus', 'admins'),['data' => $data]);

    }
}
