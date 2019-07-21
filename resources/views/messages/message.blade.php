<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header"><h5>Сообщение</h5></div>
				<div class="card-body">

					<div class="float-right">
						<a class="btn btn-danger" href="home" role="button">Вернуться</a>
					</div>

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script type="text/JavaScript">

						$(document).ready(function() {
							$("#contact").submit(function(event) {
								event.preventDefault();
								$.ajax({
									url: "{{route('contact')}}",
									type: "post",
									data: $("#contact").serialize(),
									success: function(answer) {
										$("#answer").html(answer);
									}
								}).done(function() {
									$("#contact").trigger('reset');
								});
							});
						});

					</script>
					<form id="contact" action="" name="contact" method="post">
						@csrf
						<textarea id="text" name="text" rows="10" cols="40"></textarea><br/>
						<button class="btn btn-success" name="send">отправить</button>
						<input type="hidden" name="name" value={{$_POST['name']}}>
						<input type="hidden" name="auth_email" value={{$_POST['auth_email']}}>
						<input type="hidden" name="user_email" value={{$_POST['user_email']}}>
					</form>
					<div id="answer"></div>
				</div>
			</div>
		</div>
	</div>
</div>
