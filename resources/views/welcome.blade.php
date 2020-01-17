<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

		<!-- Scripts-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /*align-items: center;*/
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                /*text-align: center;*/
            }

            .title {
                font-size: 34px;
            }

			.m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
			<div class="top-right links">
				@auth
				<a href="{{ url('/home') }}">Home</a>
				@else
				<a href="{{ route('login') }}">Login</a>

				@if (Route::has('register'))
				<a href="{{ route('register') }}">Register</a>
				@endif
				@endauth
			</div>
            @endif

            <div class="content">
                <div class="title m-b-md text-center">
                    Articles list
                </div>
				
					<div class="row d-flex  p-4">
						<div class="col-3">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqNrjAJSmwHUSTlg-dFj9qKO0Yc2bLEvx3NOo4fGmciN538XTg&s" width="400">
						</div>
						
						<div class="col-9 w-75">
							<a href="#">
							<div class="h3">Title of first article</div>
							<div>
								</a>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in quam dolor. Praesent elementum justo at arcu egestas, eu pulvinar arcu posuere. Nunc semper laoreet elementum. Donec a pellentesque magna. Integer leo nisi, dictum sit amet risus nec, euismod egestas lacus. Etiam feugiat odio turpis. Mauris enim arcu, interdum in consequat eu, rutrum at lorem. Aliquam in quam fermentum, pulvinar lectus a, fringilla massa. Cras dapibus diam in sem condimentum aliquet. Sed a mollis nulla, at dictum arcu. Donec finibus massa sed maximus volutpat. Vestibulum consectetur eleifend nisi eget rutrum.
							</div>
							
							<div>
								<div class="h4">Coments</div>
								<ul class="list-group">
									<li>Fist comment</li>
									<li>second comment</li>
									<li>Third comment</li>
								</ul>
							</div>
						</div>
					</div>
				
				
					<div class="row d-flex">
						<div class="col-3 p-4">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGlFkZvWjRG2Gn_x72mG0EFjtX15l5CsX84WCBht1vL7hlyQJtNw&s" width="400">
						</div>
						<div class="col-9 w-75">
							<a href="#">
							<div class="h3">Title of second article</div>
							</a>
							<div>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in quam dolor. Praesent elementum justo at arcu egestas, eu pulvinar arcu posuere. Nunc semper laoreet elementum. Donec a pellentesque magna. Integer leo nisi, dictum sit amet risus nec, euismod egestas lacus. Etiam feugiat odio turpis. Mauris enim arcu, interdum in consequat eu, rutrum at lorem. Aliquam in quam fermentum, pulvinar lectus a, fringilla massa. Cras dapibus diam in sem condimentum aliquet. Sed a mollis nulla, at dictum arcu. Donec finibus massa sed maximus volutpat. Vestibulum consectetur eleifend nisi eget rutrum.
							</div>
							<div>
								<div class="h4">Coments</div>
								<ul class="list-group">
									<li>Fist comment</li>
									<li>second comment</li>
									<li>Third comment</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="row d-flex  p-4">
						<div class="col-3">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSPZvM3QIyjiKBCS-x2Ix1OYZ57MF861fNcFk2PcBJUqHD2_kpSg&s" width="400">
						</div>
						<div class="col-9 w-75">
							<a href="#">
							<div class="h3">Title of fird article</div>
							</a>
							<div>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in quam dolor. Praesent elementum justo at arcu egestas, eu pulvinar arcu posuere. Nunc semper laoreet elementum. Donec a pellentesque magna. Integer leo nisi, dictum sit amet risus nec, euismod egestas lacus. Etiam feugiat odio turpis. Mauris enim arcu, interdum in consequat eu, rutrum at lorem. Aliquam in quam fermentum, pulvinar lectus a, fringilla massa. Cras dapibus diam in sem condimentum aliquet. Sed a mollis nulla, at dictum arcu. Donec finibus massa sed maximus volutpat. Vestibulum consectetur eleifend nisi eget rutrum.
							</div>
							<div>
								<div class="h4">Coments</div>
								<ul class="list-group">
									<li>Fist comment</li>
									<li>second comment</li>
									<li>Third comment</li>
								</ul>
							</div>
						</div>
					</div>
            </div>
        </div>
    </body>
</html>
