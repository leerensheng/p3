@extends('layouts.master')

@section('title')
    Show Random User
@stop

@section('content')
    <form method='POST' action='/randomuser'>
        {{ csrf_field() }}
        <input type='text' name='numberUser'>
        <input type='submit' value='Submit'>
    </form>

    <?php
        $numberUser = "";
        if(isset($_POST['numberUser'])) {
            $numberUser = $_POST['numberUser'];
        }
        // require the Faker autoloader
        #require_once '/p3/vendor/fzaninotto/faker/src/autoload.php';

        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create();

        for ($i=0; $i<$numberUser; $i++) {
        // generate data by accessing properties
            echo $faker->name, "<br>";
              // 'Lucy Cechtelar';
            echo $faker->address, "<br>";
              // "426 Jordy Lodge
              // Cartwrightshire, SC 88120-6700"
            echo $faker->text, "<br><br>";
              // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
              // et sit et mollitia sed.
              // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
              // sit minima sint.
        }
    ?>
@stop
