<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class InquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return $this->index();
    }

    public function index()
    {
        return view('admin.inquiries.index' );
    }

    public function list(Request $request)
    {
        $data = DB::table('inquiries')->orderBy('created_at','DESC');
        $merchants = DataTables::queryBuilder($data)->make(true);
        return $merchants;
    }




}
