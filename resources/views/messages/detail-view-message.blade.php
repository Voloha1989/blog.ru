@extends('chat.app')

@section('main_content')
    <div class="container">
        <div class="justify-content-center">
            <div class="card">

                <div class="card-header">
                    <h5>Сообщение</h5>
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-inverse chat-table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th scope="row">{{$message->id}}</th>
                            <td>{{$message->name}}</td>
                            <td><em>{{$message->auth_email}}</em></td>
                            <td class="message">{{$message->text}}</td>
                            <td class="text-center icons-wight">
                                <form id="delete-message" action="{{ route('delete-message', [$message->id]) }}"
                                      method="post">
                                    <button type="submit" class="btn btn-link" title="Delete">
                                        <i class="fa fa-trash my-basket"></i>
                                    </button>
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-danger" href="{{url('/list-incoming-messages')}}" role="button">Вернуться</a>

                </div>
            </div>
        </div>
    </div>
@endsection
