<!-------------------->
<!-- Navbar Incofur -->
<!-------------------->

<!-- HTML -->
<header>
	<h1 class="coolvetica" style="font-weight: 100;">Incofur</h1>
	<nav class="montserrat">
		<a href="./About">About</a>
		<a href="./About">News</a>
		<a href="./About">Contacts</a>
	</nav>
</header>

<!-- CSS -->
<style>
	* {
		animation: fadetop 2s cubic-bezier(0.77, 0, 0.175, 1);
	}

	a {
		/* background-color: black; */
		text-decoration: none;
		margin: clamp(10px, 3dvw, 30px);
		font-size: clamp(8px, 3dvw, 24px);
	}
	h1 {
		position: relative;
		/* background-color: black; */
		line-height: 1dvh;
		font-size: clamp(16px, 5dvw, 48px);
	}
	header {
		/* background-color: slategray; */
		z-index: 2;
		padding-top: 1dvw;
		display: flex;
		align-items: center;
		justify-content: space-between;
		height: fit-content;
		padding-inline: clamp(8px, 5dvw, 48px);
		position: sticky;
		top: 0;
	}
</style>
