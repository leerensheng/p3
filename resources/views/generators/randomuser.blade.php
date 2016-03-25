@extends('layouts.master')

@section('title')
    Show Random User
@stop

@section('content')
    <form method='POST' action='/randomuser'>
        {{ csrf_field() }}
        <label>How many random users?</label>
        <input
            type='text'
            name='numberUser'
            value='{{ old('numberUser') }}'
        >
        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type='submit' value='Submit'>
    </form>

    <?php
        $userArray;
    ?>
@stop
