<template>
	<div class="relative h-[70vh]">
		<div class="glow absolute-center size-[190px] rounded-full"></div>
		<img src="/img/romi.jpg" alt="" class="absolute-center size-[190px] rounded-full" />
		<div id="aaa" class="absolute -bottom-1/2 left-0 h-full w-full"></div>
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

<style lang="sass" scoped></style>
