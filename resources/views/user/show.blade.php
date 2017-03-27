@extends('layout/public')

@section('content')
  <a href="/user/">< Back</a>
  <a href="/user/{{ $user->id }}/edit">+ Edit</a>
  <ul>
    <li>Name: {{ $user->name }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Created: {{ $user->created_at }}</li>
  </ul> 
@stop