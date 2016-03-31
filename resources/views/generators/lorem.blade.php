@extends('layouts.master')

@section('title')
    Show Lorem Ipsum
@stop

@section('content')
    <h2>Lorem Ipsum Generator</h2>
    <p>Welcome to the Lorem Ipsum Generator!</p>
    <p>This application will automatically produce Lorem Ipsum paragraphs. Simply enter the number of paragraphs that you would like displayed and hit submit.</p>
    <form method='post' action='/loremipsum'>
        {{ csrf_field() }}
        <label>How many paragraphs?</label>
        <br>
        <input type='text'
            name='numberLorem'
            value='{{ old('numberLorem') }}'
        >
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type='submit' value='Generate!'>
    </form>
    <br>
    <?php
        #This code should tell the generator how many paragraphs to display
        #Move to controller Lines 22-32
        #if(isset($_POST['numberLorem'])) {
        #    $numberParagraphs = $_POST['numberLorem'];
        #}
        #else {
            #This is the default if the user doesn't enter a number
        #    $numberParagraphs = 3;
        #}

        #Here's the Lorem Ipsum generator code
        #$generator = new Badcow\LoremIpsum\Generator();
        #$paragraphs = $generator->getParagraphs($numberParagraphs);
        echo implode('<p><br>', $paragraphs);
    ?>
@stop
