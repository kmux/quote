<?php

namespace Quote\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Quote\Http\Requests;
use Quote\Quote;

class QuotesController extends Controller
{
    public function index()
    {
        $quotes = Quote::orderBy('created_at', 'desc')->paginate(8);

        return view('quotes.index', compact('quotes'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:3|max:255',
            'title'    => 'required|min:12|max:255'
        ]);

        Quote::create($request->only('username', 'title'));

        Session::flash('message', 'Quote saved.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->delete();

        Session::flash('message', 'Quote deleted.');

        return redirect()->back();
    }

    public function user($username)
    {
        $quotes = Quote::where('username', $username)->orderBy('created_at', 'desc')->paginate(8);

        return view('quotes.index', compact('quotes'));
    }
}
