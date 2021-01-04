<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

</head>
<body>
	<div id="one">
		<h1>
			@{{ shared.user.name }}
		</h1>
	</div>

	<div id="two">
		<h1>
			@{{ shared.user.name }}
		</h1>
	</div>

	<script src="https://unpkg.com/vue@2.6.12/dist/vue.js"></script>
	<script src="/js/shared_state.js"></script>
</body>
</html>