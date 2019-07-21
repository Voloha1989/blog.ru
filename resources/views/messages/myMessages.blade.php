@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h5>Сообщения</h5></div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-inverse">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                            </thead>

                            @foreach($listMessages as $message)
                                <tbody>
                                <tr>
                                    <th scope="row">{{$message->id}}</th>
                                    <td>{{$message->name}}</td>
                                    <td><em>{{$message->auth_email}}</em></td>
                                    <td>{{$message->text}}</td>
                                </tr>
                                </tbody>
                            @endforeach

                        </table>
                        <a class="btn btn-danger" href="home" role="button">Вернуться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection