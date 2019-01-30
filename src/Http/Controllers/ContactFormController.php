<?php
namespace Sahil\First\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sahil\First\Models\ContactForm;
use Validator;

class ContactFormController extends Controller {

    public function index()
    {

        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {

        $validator = Validator::make($request->all(),ContactForm::rules());
        if ($validator->fails()) {
            //dd($validator->messages());
            return redirect()->back()->with(['errors' => $validator->messages()]);;
        }//die;
        ContactForm::create($request->all());
        return redirect()->back()->with(['message' => 'Thank you, your message has been sent successfully.']);
    }


}