<?php

namespace App\Http\Controllers;

use App\Models\Costomer;
use Illuminate\Http\Request;

class CostomerController extends Controller
{

    private $costomer;
    public function __construct(Costomer $costomer){
        $this->costomer = $costomer;
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'email' => 'required|email',
            'message' => 'required|min:1|max:5000'
        ]);

        $this->costomer->name = $request->name;
        $this->costomer->email = $request->email;
        $this->costomer->message = $request->message;
        $this->costomer->save();

        return redirect()->back()->with('success', 'Thank you for sending me a message! If necessary, I will send you a message to your email address!');
    }


}
