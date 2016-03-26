@extends('layouts.master')

@section('title')
    Welcome to the Generator
@stop

@section('content')
    <p>This is an application designed to generate content for busy developers!</p>
    <div class="row text-center">
        <div class="col-md-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Lorem Ipsum Generator</h3>
                    <p>Select the Lorem Ipsum generator if you'd like to generate paragraphs of random text that you can use as placeholders in your web development projects.</p>
                    <p>
                        <a class="btn btn-default" href="/loremipsum">Generate!</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Random User Generator</h3>
                    <p>Select the Random User generator if you'd like to generate a list of users that you can use as placeholders to fill in a sample database of users.</p>
                    <p>
                        <a class="btn btn-default" href="/randomuser">Generate!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
