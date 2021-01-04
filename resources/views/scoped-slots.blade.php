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
		<menu-list :items="['one', 'two', 'three']">
			<!-- <template scope="props">
				<h2 v-text="props.bar"></h2>
			</template> -->
			<!-- <template scope="{ bar }">
				<h2 v-text="bar"></h2>
			</template> -->
			<template slot="menu-item" scope="props">
				<div>
					<em v-text="props.item"></em>
				</div>
			</template>
		</menu-list>
	</div>

	<script src="https://unpkg.com/vue@2.6.12/dist/vue.js"></script>
	<script src="/js/scoped_slots.js"></script>
</body>
</html>