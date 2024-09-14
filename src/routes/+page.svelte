<script>
	import Navbar from './Navbar.svelte';
	import bannerImage from '../images/incofurbg.png';
</script>

<svelte:head>
	<title>Incofur Community</title>
</svelte:head>

<body id="bg">
	<Navbar />
	<h1 class="montserrat">Welcome to SvelteKit</h1>
	<p class="montserrat">
		Visit <a href="https://kit.svelte.dev">kit.svelte.dev</a> to read the documentation
	</p>

	<img src={bannerImage} alt="incofurbg" />
	<div class="banner-gradient"></div>
</body>

<style>
	/* body {
		height: 50vh;
		width: auto;
		background-image: linear-gradient(to top, #20214e 40%, rgba(0, 0, 0, 0)),
			url(../images/incofurbg.png);
		background-repeat: no-repeat;
		background-size: contain;
		background-attachment: fixed;
	} */

	[id*='bg'] {
		margin: 0px;
		position: relative;
		height: 100%;
		z-index: -1;
		background-color: #20214e;
	}

	img,
	.banner-gradient {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		z-index: -1;
		background-image: linear-gradient(to top, #20214e, rgba(0, 0, 0, 0));
		/* background-color:red; */
	}
	.banner-gradient {
		z-index: -1;
		aspect-ratio: 23/11;
		height: auto;
	}
</style>
