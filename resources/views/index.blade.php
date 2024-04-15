<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>iLoveDogs!</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="main-menu-screen">
		<div class="menu">
			<h1>Bonus Game!</h1>
			<h3>Welcome to my Tamagotchi game!</h3>
			<div class="menu-buttons">
				<a href="#" id="action-menu-start-game">Start</a>
				<a href="#" id="action-menu-settings">Settings</a>
			</div>
		</div>
	</div>

	<div class="menu-screen-settings">
		<div class="settings">
			<h2>Settings</h2>
			<div class="settings-buttons">
				<h3>Difficulty: <span id="difSet">Normal</span></h3>
				<a href="#" id="action-settings-difficulty-hard">Hard</a>
				<a href="#" id="action-settings-difficulty-normal">Normal</a>
				<a href="#" id="action-settings-difficulty-easy">Easy</a>
				<br>
				<h3>Night mode: <span id="nightmode">off</span></h3>
				<a href="#" id="nightmode-on">On</a>
				<a href="#" id="nightmode-off">Off</a>
				<br>
				<a href="#" id="action-settings-back">Back</a>
			</div>
		</div>
	</div>

	<div class="game-screen">
		<div class="tamagotchi">
			<div class="hp">
				<p>Sleep: <span id="sleep-hp"></span>%</p>
				<p>Hunger: <span id="hunger-hp"></span>%</p>
				<p>Play: <span id="play-hp"></span>%</p><br>
				<p id="score-bar">Score: <span id="score"></span></p>
			</div>

			<p><span id="name"></span></p>
		  	<p id="t-body"><span id="effect-left">°˖✧</span><span id="hand-left">◝</span>(<span id="eye-left">＾</span><span id="mouth">▿</span><span id="eye-right">＾</span>)<span id="hand-right">◜</span><span id="effect-right">✧˖°</span></p>

		  	<div class="buttons">
				<a href="#" id="action-sleep">Sleep</a>
				<a href="#" id="action-feed">Feed</a>
				<a href="#" id="action-play">Play</a>
			</div>
		</div>
	</div>
<!-- partial -->
  <script  src="js/script2.js"></script>

</body>
</html>
