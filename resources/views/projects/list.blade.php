@if($projects->isNotEmpty())
	<ul class="menu-list">
	@foreach($projects as $project)
		<li>{{ $project->name }}</li>
	@endforeach
	</ul>
	<hr>
@endif