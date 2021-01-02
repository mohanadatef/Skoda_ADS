<?php

namespace App\Http\Controllers;

use App\Exports\ADSExport;
use App\Http\Requests\SkodaADSCreateRequest;
use App\Request_Ads;
use Maatwebsite\Excel\Facades\Excel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(SkodaADSCreateRequest $request)
    {
        $ads = new Request_Ads();
        $ads->create($request->all());
        if($request->kind_request == 'Book Test Drive')
        {
            return redirect('thank');
        }
        elseif($request->kind_request == 'Receive Sales Call')
        {
            return redirect('thank1');
        }
    }

    public function thank()
    {

        return view('thank');
    }
    public function thank1()
    {

        return view('thank1');
    }
    public function export()
    {
        $data = Request_Ads::all(['first_name','last_name','email','mobile','city','car_model','kind_request'
            ,'created_at']);
        //return Excel::download(new ADSExport, time() . ' ' . 'ADS.xlsx');
        return Excel::create('ADS', function($excel) use ($data) {
            $excel->sheet('ADS', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download('xls');
    }
}
