
@extends('layouts.app')

<p>Hello, {{$user ?? 'Guest'}}</p>



<form  method="POST" class="form-group">
    <input class="form-control" type="email" name="email" placeholder="example@email.com">
    <input class="form-control" type="password" name="password" placeholder="Password">
    <input type="submit" class="btn btn-success" value="LOGIN" formaction="/login">
    <input type="submit" class="btn btn-success" value="CREATE USER" formaction="/register">
</form>


<p>{{$data ?? ''}}</p>
