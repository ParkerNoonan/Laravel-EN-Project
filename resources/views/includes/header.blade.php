<div class="header1">
	<h1 class="header_tab_large"><i>The Bored Engineer</i></h1>
	<p class="header_tabs"><a href="/">Home</a></p>
	<p class="header_tabs"><a href="{{ url('/contact') }}">Contact</a></p>
	<p class="header_tabs"><a href="/create">Create</a></p>
	<div class="dropdown">
		<button class="dropbtn">Links</button>
		<div class="dropdown-content">
			<a href="{{ url('/project') }}">Add Project Site</a>
			<a href="{{ url('/add_valve') }}">Add Valve</a>
			<a href="{{ action('Controller@Submit3') }}">View Project Sites</a>
			<a href="{{ action('Controller@Submit9') }}">View Valves</a>
		</div>
	</div>
</div>