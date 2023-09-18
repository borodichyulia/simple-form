@extends('base')

@section('content')

<div class="d-flex flex-column align-items-center">
    <h2>Данные пользователя</h2>
    <ul class="list-group col-md-6">
        <li class="list-group-item">{{$user->first_name}}</li>
        <li class="list-group-item">{{$user->last_name}}</li>
        <li class="list-group-item">{{$user->middle_name}}</li>
        <li class="list-group-item">{{$user->date_of_birth}}</li>
        <li class="list-group-item">{{$user->email}}</li>
        <li class="list-group-item">{{$user->country_code}} {{$user->phone}}</li>
        <li class="list-group-item">{{$user->marital_status}}</li>
        <li class="list-group-item">{{$user->about}}</li>
    </ul>
    @if ($message = Session::get('success'))
    <div class="col-md-6 mt-4">
        <div class="alert alert-success w-75" role="alert">
            <p>{{ $message }}</p>
        </div>
    </div>
    @endif
</div>



