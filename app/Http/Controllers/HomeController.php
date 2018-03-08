<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveInquiryRequest;
use Illuminate\Http\Request;
use App\Inquiry;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function storeInquiry(SaveInquiryRequest $request)
    {
        $inquiry = Inquiry::create($request->all());

        if ($inquiry) {
            return redirect('/')
                ->with('status', 'success')
                ->with('message', 'Successfully sent inquiry!');
        } else {
            return redirect()->back()
                ->withInput()
                ->with('status', 'error')
                ->with('message', 'Failed to send inquiry!');
        }
    }
}
