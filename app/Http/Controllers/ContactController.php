<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
// use Illuminate\Support\Facades\Validator;
use App\Rules\Postcode;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {

        $request->validate([
            'postcode' => new Postcode(),
        ]);
        $this->validate($request, Contact::$rules);

        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input = $request->except('action');
        if ($action === 'submit') {
            $contact = new Contact;
            // 'fullname' => $request->input('firstname').''.('lastname');
            $contact->fill($input);
            // unset($form['_token_']);
            $contact->fill($input)->save();
            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
        //    return Contact::process([
        //        'fullname' => $request['lastname'] . '' . ['firstname']

    }

    public function complete()
    {
        return view('contacts.complete');
    }
}
