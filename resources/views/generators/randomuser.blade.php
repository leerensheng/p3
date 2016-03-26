@extends('layouts.master')

@section('title')
    Show Random User
@stop

@section('content')
    <p>On this page, you can generate random users! If you are developing a database application, this will for sure be useful.</p>
    <form method='POST' action='/randomuser'>
        {{ csrf_field() }}
        <label>How many random users?</label>
        <br>
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
        <input type='submit' value='Generate!'>
    </form>

    @if(isset($userArray))
        <table>
            <tbody>
                @foreach($userArray as $users)
                    <tr>
                        <td>
                            {{ $users['name'] }}
                        </td>
                        <td>
                            {{ $users['address'] }}
                        </td>
                        <td>
                            {{ $users['text'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
