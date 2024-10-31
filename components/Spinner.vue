<template>
	<div class="flex h-full w-full items-center justify-center">
		<svg :viewBox="`0 0 ${size} ${size}`">
			<circle :cx="size / 2" :cy="size / 2" :r="size / 2 - size / 20"></circle>
		</svg>
	</div>
</template>

<script setup>
	const props = defineProps({
		size: {
			type: Number,
			required: false,
			default: 60,
		},
		color: {
			type: String,
			required: false,
			default: '#FED33C',
		},
		class: {
			type: String,
			required: false,
			default: '',
		},
	})
	const sizepx = props.size + 'px'
	const animationValues = [0.66 * props.size, 3.14 * props.size]
</script>

<style lang="scss" scoped is="inline">
	svg {
		width: v-bind('sizepx');
		height: v-bind('sizepx');
		x: 0px;
		y: 0px;
		position: relative;
	}

	svg circle {
		fill: transparent;
		stroke: v-bind('props.color');
		stroke-width: calc(v-bind('size') / 10);
		stroke-linecap: round;
		stroke-dasharray: calc(3.14 * v-bind('size'));
		transform-origin: calc(0.5px * v-bind('size')) calc(0.5px * v-bind('size')) 0;
		animation: spinner 2.85s linear infinite;
	}

	@keyframes spinner {
		0% {
			stroke-dashoffset: v-bind('animationValues[0]');
			transform: rotate(0deg);
		}
		50% {
			stroke-dashoffset: v-bind('animationValues[1]');
			transform: rotate(540deg);
		}
		100% {
			stroke-dashoffset: v-bind('animationValues[0]');
			transform: rotate(1080deg);
		}
	}
</style>
