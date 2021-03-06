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
        $paragraphs = [];
        return view('generators.lorem')->with('paragraphs', $paragraphs);
    }

    public function postLorem(Request $request) {

        $this->validate($request, [
            'numberLorem'=>'required|numeric'
        ]);

        # Here's the Lorem Ipsum generator code
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($request->input('numberLorem'));

        return view('generators.lorem')->with('paragraphs', $paragraphs);
    }

    public function getUsers() {
        $userArray = [];
        return view('generators.randomuser')->with('userArray', $userArray);
    }

    public function postUsers(Request $request) {
        $this->validate($request, [
            'numberUser'=>'required|numeric'
        ]);

        // use the factory to create a Faker\Generator instance
        $faker = \Faker\Factory::create();

        $userArray =[];
        for($i=0; $i<$request->input('numberUser'); $i++){
            $thisUser = [];
            $thisUser['name'] = $faker->name;
            $thisUser['address'] = $faker->address;
            $thisUser['text'] = $faker->text;
            array_push($userArray, $thisUser);
        }

        #dd($userArray);
        return view('generators.randomuser')->with('userArray', $userArray);
    }
} #eoc
