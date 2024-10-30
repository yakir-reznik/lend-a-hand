<template>
	<div class="bg-dark-900 relative pb-16">
		<!-- <Spiral /> -->
		<!-- <SpiralRows /> -->

		<div class="relative h-[70vh]">
			<div class="glow absolute-center size-[190px] rounded-full"></div>
			<img src="/img/romi.jpg" alt="" class="absolute-center rounded-full" />
			<div id="aaa" class="absolute -bottom-1/2 left-0 h-full w-full"></div>
		</div>

		<div class="bg-dark-900/70 absolute bottom-0 left-0 w-full py-8 text-center">
			<div class="wrapper">
				<h2 class="text-5xl font-bold text-white">רומי</h2>
				<p class="text-2xl font-medium text-gray-300">מחכה שנחזיר אותה הביתה</p>
				<HandBtn class="-mt-4 translate-y-16">גם אני רוצה לתת יד</HandBtn>
			</div>
		</div>

		<div
			class="absolute left-0 top-0 flex w-full justify-between px-4 pb-24 pt-4 desktop:bottom-0 desktop:left-1/2 desktop:top-auto desktop:w-[1200px] desktop:-translate-x-1/2 desktop:px-0 desktop:pb-12"
		>
			<div class="absolute inset-0 bg-gradient-to-b from-black to-transparent desktop:hidden"></div>
			<div class="relative text-center">
				<p class="dir-ltr text-dark-800 mb-2 flex gap-1 text-3xl font-black desktop:gap-2 desktop:text-5xl">
					<span class="bg-primary px-2 py-[2px] desktop:p-2">3</span>
					<span class="bg-primary px-2 py-[2px] desktop:p-2">8</span>
					<span class="bg-primary px-2 py-[2px] desktop:p-2">8</span>
				</p>
				<h5 class="font-semibold tracking-wide text-white desktop:text-xl">ימים בשבי</h5>
				<img class="absolute -bottom-1 left-0 h-[6px]" src="/img/underline.svg" alt="Yellow styled underline" />
			</div>
			<div class="relative text-center">
				<p class="text-5xl font-black text-primary desktop:text-6xl">124,345</p>
				<h5 class="font-semibold tracking-wide text-white desktop:text-xl">נתנו יד להשבת החטופים</h5>
				<img class="absolute -bottom-1 left-0 h-[6px]" src="/img/underline.svg" alt="Yellow styled underline" />
			</div>
		</div>
	</div>
</template>

<script setup lang="ts">
	import useFloatingIcons from 'floating-icons'

	onMounted(() => {
		setInterval(() => {
			const el = document.querySelector('#aaa')
			useFloatingIcons({
				target: el as HTMLElement,
				minSize: '40px',
				maxSize: '60px',
				density: 0.3,
				distanceToTravel: '500px',
				minDuration: 2500,
				maxDuration: 5000,
				elements: [
					{
						content: '👋',
						probability: 4,
					},
					{
						content: '✋',
						probability: 4,
					},
					{
						content: '❤️',
						probability: 1,
					},
					{
						content: '🇮🇱',
						probability: 1,
					},
				],
			})
		}, 1000)
	})
</script>

<style lang="css" scoped>
	.glow {
		box-shadow: 0 0 10rem 0 rgba(117, 170, 255, 0.5);
	}
</style>
