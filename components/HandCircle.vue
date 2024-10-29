<template>
	<div ref="el" class="rotator">
		<div v-for="i in props.draw">
			<span class="relative inline-block -rotate-45">✋</span>
		</div>
		<div v-for="i in props.empty"></div>
	</div>
</template>

<script setup lang="ts">
	const props = defineProps<{
		draw: number
		empty: number
		size: number
		radius: number
		direction: 'clockwise' | 'counter-clockwise'
	}>()

	const el = ref<HTMLDivElement>()

	onMounted(() => {
		if (!el.value) return

		el.value.style.animation = 'circle 25s linear infinite'
		el.value.style.animationDirection = props.direction === 'counter-clockwise' ? 'reverse' : 'normal'

		const blocks = el.value.querySelectorAll<HTMLDivElement>('div')
		const increase = (Math.PI * 2) / blocks.length

		let x = 0
		let y = 0
		let angle = 0

		for (var i = 0; i < blocks.length; i++) {
			const elem = blocks[i]
			x = props.radius * Math.cos(angle) + 150
			y = props.radius * Math.sin(angle) + 150
			elem.style.left = x + 'px'
			elem.style.top = y + 'px'
			// var rot = 90 + i * (360 / blocks.length)
			angle += increase
		}
	})
</script>

<style lang="css">
	@keyframes circle {
		from {
			transform: rotate(0deg);
		}
		to {
			transform: rotate(360deg);
		}
	}

	@keyframes inner-circle {
		from {
			transform: rotate(0deg);
		}
		to {
			transform: rotate(-360deg);
		}
	}
	.rotator {
		grid-row: 1;
		grid-column: 1;
		width: 350px;
		height: 350px;
		margin: 20px auto;
		font-size: 10px;
		line-height: 1;
		transform-origin: 50% 50%;
	}

	.rotator > div {
		font-size: 2rem;
		position: absolute;
		animation: inner-circle 25s linear infinite;
		width: 50px;
		height: 50px;
		transform: rotate(45deg);
	}
</style>
