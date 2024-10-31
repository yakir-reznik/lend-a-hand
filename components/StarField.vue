<template>
	<div class="relative h-[70vh]">
		<div class="starfield"></div>
		<div class="glow absolute-center aspect-square w-1/2 rounded-full desktop:size-[190px]"></div>
		<img src="/img/romi.jpg" alt="" class="absolute-center w-1/2 rounded-full desktop:size-[190px]" />
	</div>
</template>

<script setup lang="ts">
	onMounted(() => {
		// Generate random star positions and animations
		for (let i = 0; i < 200; i++) {
			const star = document.createElement('div')

			// Random number between -20 and 20
			const randomRotation = Math.floor(Math.random() * 40) - 20

			star.classList.add('star')
			star.textContent = '✋'
			star.style.left = Math.floor(Math.random() * 100) + '%'
			star.style.top = Math.floor(Math.random() * 100) + '%'
			star.style.fontSize = randomSize() + 'px'
			star.style.transform = `rotate(${randomRotation}deg)`
			star.style.animationDelay = Math.random() * 10 + 's'
			document.querySelector('.starfield')!.appendChild(star)
		}
	})

	function randomSize() {
		if (isDesktop) {
			return Math.floor(Math.random() * 70) + 20
		}
		return Math.floor(Math.random() * 50) + 10
	}
</script>

<style lang="css">
	.starfield {
		height: 100%;

		overflow: hidden;
		position: relative;
		perspective: 1000px;
	}

	.star {
		position: absolute;
		font-size: 60px;
		color: #fff;
		animation-name: fly;
		animation-duration: 10s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
		opacity: 0;
	}

	.glow {
		box-shadow: 0 0 10rem 0 rgba(117, 170, 255, 0.5);
	}

	@keyframes fly {
		0% {
			transform: translateZ(-2000px) rotate(20deg) translateY(0);
			opacity: 0;
		}
		50% {
			transform: translateZ(-1000px) rotate(-20deg) translateY(-100px);
			opacity: 1;
		}
		100% {
			transform: translateZ(0px) rotate(20deg) translateY(-300px);
			opacity: 0;
		}
	}
</style>
