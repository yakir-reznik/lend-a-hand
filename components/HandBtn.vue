<template>
	<button
		class="hand-btn shadow-dark-900 inline-flex items-center justify-center gap-4 rounded-full bg-primary px-12 py-4 text-xl font-bold transition hover:bg-primary-400 active:scale-[0.975] desktop:text-2xl"
		@click="handleClick"
	>
		<img src="/img/one-hand.svg" alt="One hand" />
		<span><slot></slot></span>
	</button>
</template>

<script setup lang="ts">
	import { useFloatingIcons } from 'floating-icons'

	const handleClick = (e: MouseEvent) => {
		useFloatingIcons({
			target: e.currentTarget as HTMLElement,
			minSize: '40px',
			maxSize: '60px',
			density: 0.625,
			distanceToTravel: '180px',
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
	}
</script>

<style lang="css" scoped>
	.hand-btn {
		box-shadow: 0 6px 0 0 var(--tw-shadow-color);
		/* transition: box-shadow 100ms; */
	}
	.hand-btn:active {
		box-shadow: 0 4px 0 0 var(--tw-shadow-color);
	}
</style>
