<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Consultant;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use App\Models\ContactProperty;
use App\Models\NewArrival;
use App\Models\Property;
use App\Models\Service;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['offers'] = Service::where('status', 1)->latest()->get();
        return view('index', $data);
    }
    
    public function details(){
        return view('details');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactus');
    }
    
    public function form_submit(Request $request)
    {
        if ($request->reserv_persons == NULL & $request->table == NULL) {
            Notify::error('Please select one Indoor party area or Outdoor Table !', 'Error');
            return back();
        }
        $request->validate([
            'reserv_name' => 'required|min:2',
            'date' => 'required',
            'reserv_time' => 'required',
            'reserv_persons' => '',
            'email' => 'required',
            'phone' => 'required',
            'table' => '',
            'nid_number' => '',
            'place' => '',
        ]);

        $table_booking = ContactFormSubmit::where('table', $request->table)->where('date', $request->date)->where('reserv_time', $request->reserv_time)->get()->count();
        $indoor_booking = ContactFormSubmit::where('reserv_persons', $request->reserv_persons)->where('date', $request->date)->where('reserv_time', $request->reserv_time)->get()->count();

        if ($table_booking != 0) {
            Notify::error('This table already booked, Please choose another Table !', 'Alredy Booked');
            return back();
        }

        if ($indoor_booking != 0) {
            Notify::error('This Indoor party area already Booked, Please choose another party place !', 'Alredy Booked');
            return back();
        }
        ContactFormSubmit::create($request->except('_token'));
        Notify::success('Your Table Booked Successfully !', 'Success');
        return back();
    }


}
