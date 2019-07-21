@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h5>All users</h5></div>
                    <div class="card-body">

                        <div class="float-right">
                            <a class="btn btn-primary" href="myMessages" role="button">Мои сообщения</a>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($listUsers as $user)
                            <form method="POST" action="message">
                                @csrf
                                <h5>{{$user->name}}</h5>
                                <em>{{$user->email}}</em><br>
                                <button type="submit" class="btn btn-success">Написать сообщение</button><br>
                                <input type="hidden" name="name" value={{Auth::user()->name}}>
                                <input type="hidden" name="auth_email" value={{Auth::user()->email}}>
                                <input type="hidden" name="user_email" value={{$user->email}}>
                            </form><br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection