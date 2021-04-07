@extends('chat.app')

@section('main_content')
    <div class="container">
        <div class="justify-content-center">
            <div class="card">

                <div class="card-header">
                    <h5>Сообщение для {{$_POST['user_name']}}</h5>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/JavaScript">
                    $(document).ready(function () {
                        $("#contact").submit(function (event) {
                            event.preventDefault();
                            $.ajax({
                                url: "{{route('save-form-message')}}",
                                type: "post",
                                data: $("#contact").serialize(),
                                success: function (result) {
                                    let response;
                                    if (result) {
                                        response = "<p style='color: green;'>Сообщение отправлено</p>";
                                    } else {
                                        response = "<p style='color: red;'>Введите сообщение</p>";
                                    }
                                    $("#response").html(response);
                                }
                            }).done(function () {
                                $("#contact").trigger('reset');
                            });
                        });
                    });
                </script>

                <form id="contact" action="" method="post" class="text-center message-form">
                    @csrf
                    <textarea id="text" name="text" rows="10" cols="40" maxlength="254"></textarea><br/>
                    <button class="btn btn-success" name="send">Отправить</button>
                    <a class="btn btn-danger" href="{{url('/home')}}" role="button">Вернуться</a>
                    <input type="hidden" name="auth_name" value={{$_POST['auth_name']}}>
                    <input type="hidden" name="auth_email" value={{$_POST['auth_email']}}>
                    <input type="hidden" name="user_email" value={{$_POST['user_email']}}>
                    <br><br>
                    <div id="response"></div>
                </form>

            </div>
        </div>
    </div>
@endsection
