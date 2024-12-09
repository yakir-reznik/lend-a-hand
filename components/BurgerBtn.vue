<template>
	<button
		@click="emit('toggle')"
		class="-ml-4 w-14 tablet:hidden desktop:hidden"
		:class="{ 'is-open': props.isOpen }"
	>
		<span class="top bg-secondary-200 block h-[0.15rem] w-full rounded"></span>
		<span class="mid bg-secondary-200 block h-[0.15rem] w-full rounded"></span>
		<span class="bot bg-secondary-200 block h-[0.15rem] w-full rounded"></span>
	</button>
</template>

<script setup>
	const props = defineProps({
		isOpen: {
			type: Boolean,
			required: false,
			default: false,
		},
	})
	const emit = defineEmits(['toggle'])
</script>

<style lang="sass" scoped>

	button
		padding: 0.95rem
		transition: transform 300ms ease-out

		&.is-open
			transform: translateX(0.25rem)

			.top
				transform: rotate(-225deg) translate(7px, 1px) scaleX(0.35)

			.mid
				transform: scaleX(0.5) translate(0px, -0.5px)
			.bot
				transform: rotate(225deg) translate(7px, 0px) scaleX(0.35)
				transition-delay: 80ms

	span
		transform-origin: center center
		transition: transform 350ms ease-out, opacity 300ms

	.mid
		margin: 0.35rem 0
		transition-delay: 150ms
</style>
