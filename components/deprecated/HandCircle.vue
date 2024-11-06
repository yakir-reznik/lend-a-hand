<template>
	<div ref="container" class="container" :class="props.direction">
		<div v-for="i in props.draw" class="grid place-items-center">
			<span class="relative inline-block">
				<img class="w-full" src="/img/yellow-hand.svg" alt="hand" />
			</span>
		</div>
		<div v-for="i in props.empty"></div>
	</div>
</template>

<script setup lang="ts">
	const props = defineProps<{
		draw: number
		empty: number
		elementSize: number
		diameter: number
		duration: number
		direction: 'clockwise' | 'counter-clockwise'
	}>()

	const container = ref<HTMLDivElement>()

	onMounted(() => {
		if (!container.value) return

		container.value.style.width = props.diameter + 'px'
		container.value.style.height = props.diameter + 'px'
		container.value.style.animation = `circle ${props.duration}s linear infinite`
		container.value.style.animationDirection = props.direction === 'counter-clockwise' ? 'reverse' : 'normal'

		const items = container.value.querySelectorAll<HTMLDivElement>('div')
		const increase = (Math.PI * 2) / items.length

		let x = 0
		let y = 0
		let angle = 0

		for (var i = 0; i < items.length; i++) {
			const item = items[i]
			const itemSizeOffset = props.diameter / 2 - props.elementSize / 2
			x = (props.diameter / 2) * Math.cos(angle) + itemSizeOffset
			y = (props.diameter / 2) * Math.sin(angle) + itemSizeOffset
			item.style.left = x + 'px'
			item.style.top = y + 'px'
			item.style.width = props.elementSize + 'px'
			item.style.height = props.elementSize + 'px'
			item.style.animationDuration = `${props.duration}s`
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

	@keyframes inner-circle-clockwise {
		from {
			transform: rotate(0deg);
		}
		to {
			transform: rotate(-360deg);
		}
	}

	@keyframes inner-circle-counter-clockwise {
		from {
			transform: rotate(0deg);
		}
		to {
			transform: rotate(360deg);
		}
	}

	.container {
		grid-row: 1;
		grid-column: 1;
		margin: 0 auto;
		transform-origin: 50% 50%;
	}

	.container > div {
		position: absolute;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
	}

	.container.clockwise > div {
		animation-name: inner-circle-clockwise;
	}
	.container.clockwise > div > span {
		transform: rotate(0deg);
	}

	.container.counter-clockwise > div {
		animation-name: inner-circle-counter-clockwise;
	}
	.container.counter-clockwise > div > span {
		transform: rotate(-45deg);
	}
</style>
