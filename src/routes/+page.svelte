<script>
	import Navbar from './Navbar.svelte';
</script>

<svelte:head>
	<title>
		Incofur Community
	</title>
</svelte:head>

<Navbar />
<body>
	<h1 class="">Welcome to SvelteKit</h1>
	<p>Visit <a href="https://kit.svelte.dev">kit.svelte.dev</a> to read the documentation</p>
</body>

<style>
	body {
		background-image: linear-gradient(to top, #20214e 40%, rgba(0, 0, 0, 0)), url(incofurbg.png);
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}
</style>
