@extends('chat.app')

@section('main_content')
    <div class="container">
        <div class="justify-content-center">
            <div class="card">

                <div class="card-header">
                    <h5>Все пользователи</h5>
                    <h5>Мои сообщения</h5>
                </div>

                <div class="card-body">

                    <div class="float-right">
                        <a class="btn btn-primary" href="{{url('/list-incoming-messages')}}" role="button">Входящие сообщения</a>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($listUsers as $user)
                        <form method="POST" action="{{url('/form-message')}}">
                            @csrf
                            <h5>{{$user->name}}</h5>
                            <em>{{$user->email}}</em><br>
                            <button type="submit" class="btn btn-success">Написать сообщение</button>
                            <br>
                            <input type="hidden" name="user_name" value={{$user->name}}>
                            <input type="hidden" name="auth_name" value={{Auth::user()->name}}>
                            <input type="hidden" name="auth_email" value={{Auth::user()->email}}>
                            <input type="hidden" name="user_email" value={{$user->email}}>
                        </form><br>
                    @endforeach

                    {{$listUsers->render()}}

                </div>
            </div>
        </div>
    </div>
@endsection
