<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class GeneratorController extends Controller {

    public function getIndex() {
        return view('welcome');
    }

    public function getLorem() {
        return view('generators.lorem');
    }

    public function postLorem(Request $request) {
        $this->validate($request, [
            'numberLorem'=>'required|numeric'
        ]);

        return view('generators.lorem');
    }

    public function getUsers() {
        return view('generators.randomuser');
    }

    public function postUsers(Request $request) {
        $this->validate($request, [
            'numberUser'=>'required|numeric'
        ]);

        return view('generators.randomuser');
    }
} #eoc
