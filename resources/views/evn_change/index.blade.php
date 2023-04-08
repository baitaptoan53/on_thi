@extends('layouts.app')

@section('content')

<form action="{{route('env.store')}}" method="POST">
               @csrf
               <input type="text" name="old_app_name" value="{{env('APP_NAME')}}" disabled>
               <input type="text" name="app_name">
               <br>
               <br>
               <input type="text" name="old_mail_username" value="{{env('MAIL_USERNAME')}}" disabled>
               <input type="text" name="mail_username">
               <input type="submit" value="Submit">
</form>
@endsection