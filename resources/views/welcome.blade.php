<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Product Sans Medium:wght@400&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Product Sans:wght@400;700&display=swap" />
</head>

<body>
	<div class="desktop-1">
		<div class="desktop-1-child"></div>
		<div class="register-wrapper">
			<div class="register-btn">Register</div>
		</div>
		<b class="what-would-you">What would you like to analyze today?</b>
		<div class="analyze-instagram-usernames">Analyze Instagram usernames, hashtags, and headlines to gain insights
			and optimize engagement.</div>
		<img class="image-2-icon" alt="" src="image 2.png">
		<img class="image-5-icon" alt="" src="images/image 5.png">

		<div class="frame-parent">
			<div class="frame-group">
				<div class="wrapper">
					<div class="register">@</div>
				</div>
				<input class="enter-instagram-username" type="text" placeholder="Enter Instagram username">
				<a href="{{ route('analyze.profile') }}">
					<div class="east">
						<img class="arrow-outward-icon" alt="" src="images/arrow_outward.svg">
					</div>
				</a>
			</div>
			<div class="frame-group">
				<div class="wrapper">
					<div class="register">#.</div>
				</div>
				<input class="enter-instagram-username" type="text" placeholder="Enter hashtag">
				<a href="{{ route('analyze.hastag') }}">
					<div class="east">
						<img class="arrow-outward-icon" alt="" src="images/arrow_outward.svg">

					</div>
				</a>
			</div>
			<div class="frame-div">
				<div class="frame">
					<div class="register">@</div>
				</div>
				<input class="enter-instagram-username" type="text" placeholder="Enter headline">
				<a href="{{ route('analyze.headline') }}">
					<div class="east">
						<img class="arrow-outward-icon" alt="" src="images/arrow_outward.svg">

					</div>
				</a>
			</div>
		</div>
		<img class="image-3-icon" alt="" src="images/image 3.png">
		<img class="image-4-icon" alt="" src="images/image 4.png">
	</div>
</body>

</html>