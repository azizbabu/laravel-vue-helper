<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vue Custom Input</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
</head>
<body>
	<div id="app">
		<!-- <input type="text" v-model="coupon"> -->

		<!-- <input type="text" :value="coupon" @input="coupon = $event.target.value"> -->

		<coupon	v-model="coupon">
	</div>

	<script src="https://unpkg.com/vue@2.6.12/dist/vue.js"></script>
	<script src="/js/custom_input.js"></script>
</body>
</html>