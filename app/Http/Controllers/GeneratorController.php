<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class GeneratorController extends Controller {

    public function getIndex() {
        return view('welcome');
    }

    public function postLorem() {
        return view('generators.lorem');
    }

    public function getUsers() {
        return view('generators.randomuser');
    }

} #eoc
