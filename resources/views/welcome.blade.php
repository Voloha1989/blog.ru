@extends('chat.app')

@section('main_content')
    <div class="container">
        <div class="justify-content-center my-description">
            <div class="card">

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">
                        <div class="hs-text">
                            <span>Come in and chat</span>
                            <h2>Best Chat</h2>
                            <p>A brief description of the blog is somewhat similar to the aftertaste of a good wine,
                                it further emphasizes the peculiarity of the blog and characterizes its author.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
