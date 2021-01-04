<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Project</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	<style>
		body {
			padding-top: 40px;
		}
	</style>
</head>
<body>
	<div id="app" class="container">
		<example></example>
		
		@include('projects.list')

		<form action="/project" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
			<div class="field">
				<label for="name" class="label">Project Name</label>
				<div class="control">
					<input type="text" class="input" name="name" id="name" v-model="form.name">

					<span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
				</div>
			</div>

			<div class="field">
				<label for="description" class="label">Project Description</label>
				<div class="control">
					<input type="text" class="input" name="description" id="description" v-model="form.description">

					<span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
				</div>
			</div>

			<div class="field">
				<div class="control">
					<button class="button is-primary" :disabled="form.errors.any()">Create</button>
				</div>
			</div>
		</form>

	</div>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
	<script src="https://unpkg.com/vue@2.6.12/dist/vue.js"></script> -->
	<!-- <script src="/js/vendor.js"></script> -->
	<script src="/js/app.js"></script>
</body>
</html>