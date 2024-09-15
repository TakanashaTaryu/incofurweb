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

	body {
		animation: fadetop 2s ease normal;
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
		z-index: 1;
		--angle: 0deg;
		font-size: 36pt;
		font-weight: 800;
		width: fit-content;
		margin-bottom: auto;
		margin-top: calc(15dvw + 5dvh);
		line-height: 1em;
		background-image: linear-gradient(var(--angle), #4476ff 10%, #d25fff 60%);
		background-clip: text;
		color: transparent;
		animation: gradrot 5s linear infinite;
		animation: faderight20 1.3s cubic-bezier(0.77, 0, 0.175, 1);

		&::before {
			position: absolute;
			z-index: 0;
			--angle: 0deg;
			content: 'Incofur \A Community';
			white-space: pre-wrap;
			background-image: linear-gradient(var(--angle), #4476ff 20%, #d25fff 80%);
			background-clip: text;
			opacity: 0.5;
			filter: blur(15px);
			animation: gradrot 5s linear infinite;
		}
	}
	#Subtitle {
		font-size: 12pt;
		font-weight: 550;
		margin: auto;
		margin-top: 10px;
		padding-inline: 6dvw;
		animation: faderight20 1.5s cubic-bezier(0.77, 0, 0.175, 1);
	}

	#crefurs {
		background-image: linear-gradient(45deg, aqua, aliceblue);
		background-clip: text;
		color: transparent;
		font-weight: 600;
		transition: all 100ms;
	}

	#crefurs:hover {
		font-size: 14pt;
		font-weight: 800;
		filter: drop-shadow(0px 0px 15px rgba(78, 199, 255, 0.5))
			drop-shadow(5px 5px 0px rgba(15, 2, 129, 0.493));
	}
</style>
