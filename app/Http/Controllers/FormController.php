<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\PageViews;
use Illuminate\Http\Request;
use DB;
class FormController extends Controller
{
    //
    public function index()
    {
        PageViews::createViewLog();
        return view('form');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'vid'  => 'required',
            'leadtype'  => 'required',
            'firstName'  => 'required',
            'lastName'  => 'required',
            'phone'  => 'required',
            'zip'  => 'required',
            'url'  => 'required',
            'universal_leadid'  => 'required',
            'tcpaConsent'  => 'required',
            'xxTrustedFormCertUrl'  => 'required',
            'email'  => 'required|email',

        ]);
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $form = new Form();
        $form->vid = $request->vid;
        $form->leadtype = $request->leadtype;
        $form->lastName = $request->lastName;
        $form->firstName = $request->firstName;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->zip = $request->zip;
        $form->url = $request->url;
        $form->ipaddress = $ipaddress;
        $form->tcpaConsent = $request->tcpaConsent;
        $form->universal_leadid = $request->universal_leadid;
        $form->xxTrustedFormCertUrl = $request->xxTrustedFormCertUrl;
        $form->save();
        return redirect()->route('thank-you');
    }

    public function thankyou(Request $request)
    {
        return view('thank-you');
    }

    public function getLeads(Request $request)
    {

        if(isset($_GET['startDate']) && isset($_GET['endDate'])){
            $startDate = date('m-d-Y', strtotime($request->startDate));
            $endDate = date('m-d-Y', strtotime($request->endDate));
            $leads = DB::select("select * from `forms` where date(created_at) between '$request->startDate' and '$request->endDate' order by `created_at` desc");
            $views = DB::select("select * from `page_views` where date(created_at) between '$request->startDate' and '$request->endDate' order by `created_at` desc");

        } else {
            $startDate = date('m-d-Y');
            $endDate = date('m-d-Y');
            $leads = Form::orderBy('created_at', 'desc')->get();
            $views = PageViews::get();
        }

        return view('leads', ['leads'=> $leads, 'views'=> $views, 'startDate' => $startDate, 'endDate' => $endDate]);
    }
}
