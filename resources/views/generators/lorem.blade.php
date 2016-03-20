@extends('layouts.master')

@section('title')
    Show Lorem Ipsum
@stop

@section('content')
    @if(isset($number))
        <h1>Show Number: {{ $number }}</h1>
    @else
        <h1>No Number chosen</h1>
    @endif
    <form method='post' action='/loremipsum'>
        {{ csrf_field() }}
        How many paragraphs? <input type='text' name='numberLorem'>
        <input type='submit' value='Submit'>
    </form>
    <br>
    <?php
        #This code should tell the generator how many paragraphs to display
        if(isset($_POST['numberLorem'])) {
            $numberParagraphs = $_POST['numberLorem'];
        }
        else {
            #This is the default if the user doesn't enter a number
            $numberParagraphs = 3;
        }

        #Here's the Lorem Ipsum generator code
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numberParagraphs);
        echo implode('<p><br>', $paragraphs);
    ?>
@stop
