<script>
	import Navbar from './Navbar.svelte';
	import bannerImage from '../images/incofurbg.png';
</script>

<svelte:head>
	<title>Incofur Community</title>
</svelte:head>

<body id="bg">
	<Navbar />
	<h1 class="montserrat" id="Title">
		Incofur <br /> Community
	</h1>
	<p class="montserrat" id="Subtitle">
		The Indonesian community of <span id="crefurs">creator furs.</span>
	</p>

	<img src={bannerImage} alt="incofurbg" />
	<div class="banner-gradient"></div>
</body>

<style>
	@property --angle {
		syntax: '<angle>';
		inherits: false;
		initial-value: 0deg;
	}
	[id*='bg'] {
		margin: 0px;
		position: relative;
		height: 100%;
		z-index: -1;
		background-color: #20214e;
	}

	p,
	h1 {
		padding-inline: 5dvw;
	}
	img,
	.banner-gradient {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		z-index: -1;
		background-image: linear-gradient(to top, #20214e clamp(25%, 15dvw, 35%), rgba(0, 0, 0, 0));
		pointer-events: none;
		/* background-color:red; */
	}
	.banner-gradient {
		z-index: -1;
		aspect-ratio: 23/11;
		height: auto;
	}

	@keyframes gradrot {
		from {
			--angle: 0deg;
		}
		to {
			--angle: 360deg;
		}
	}

	#Title {
		--angle: 0deg;
		font-size: 36pt;
		font-weight: 800;
		width: fit-content;
		margin-bottom: auto;
		margin-top: calc(15dvw + 5dvh);
		line-height: 1em;
		background-image: linear-gradient(var(--angle), #5e42ff 20%, #c469e7 85%);
		background-clip: text;
		color: transparent;
		transition: --angle 2s;
		animation: gradrot 5s ease infinite;
	}
	#Subtitle {
		font-size: 12pt;
		font-weight: 550;
		margin: auto;
		margin-top: 10px;
		padding-inline: 6dvw;
	}

	#crefurs {
		background-image: linear-gradient(45deg, aqua, aliceblue);
		background-clip: text;
		color: transparent;
		font-weight: 600;
		transition: all 100ms;
	}

	#crefurs:hover {
		font-size: 17pt;
		font-weight: 800;
		filter: drop-shadow(0px 0px 15px rgba(78, 199, 255, 0.5))
			drop-shadow(5px 5px 0px rgba(15, 2, 129, 0.493));
	}
</style>
