<?php

namespace App\Http\Controllers;

use App\Exports\ADSExport;
use App\Http\Requests\SkodaADSCreateRequest;
use App\Http\Requests\SkodaADSImageRequest;
use App\Request_Ads;
use Maatwebsite\Excel\Facades\Excel;


class BackController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getimage()
    {
        return view('get_image');
    }

    public function storeimage(SkodaADSImageRequest $request)
    {
        $imageName = 'skoda.png';
        Request()->image->move(public_path('Imgs'), $imageName);
        return redirect()->back()->with('message','Upload Is Done');
    }
}
