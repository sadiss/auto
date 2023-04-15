<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index()
    {
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

    public function getLeads()
    {
        $leads = Form::orderBy('created_at', 'desc')->get();
        return view('Leads', ['leads'=> $leads]);
    }
}
