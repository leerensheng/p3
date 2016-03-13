<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class GeneratorController extends Controller {

    public function getLorem() {
        $view  = '<form method="GET" action="/loremipsum">';
        $view .= csrf_field();
        $view .= 'How many paragraphs? <input type="text" name="numberLorem">';
        $view .= '<input type="submit">';
        $view .= '</form>';

        return $view;
    }

    public function getUsers() {
        $view  = '<form method="GET" action="/randomuser">';
        $view .= csrf_field();
        $view .= 'How many users? <input type="text" name="numberUser">';
        $view .= '<input type="submit">';
        $view .= '</form>';

        return $view;
    }

} #eoc
