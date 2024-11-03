<template>
	<div ref="container" class="">
		<div class="glow absolute-center aspect-square w-1/2 rounded-full tablet:w-1/3 desktop:size-[190px]"></div>
	</div>
</template>

<script setup lang="ts">
	import type { Person } from '~/composables/people'

	const props = defineProps<{
		person: Person | undefined
	}>()

	const container = ref<HTMLDivElement>()

	onUpdated(() => {
		console.log(container.value, props.person)
		if (!container.value || !props.person) return

		const prevElements = container.value.querySelectorAll('img')

		const newEl = document.createElement('img')
		const classNames = 'absolute-center w-1/2 tablet:w-1/3 rounded-full desktop:size-[190px]'.split(' ')
		newEl.classList.add(...classNames)
		newEl.src = props.person.image
		newEl.alt = props.person.name
		newEl.style.animation = 'round-image-slider-fade-in 1s forwards ease-out'

		container.value.appendChild(newEl)

		setTimeout(() => {
			prevElements.forEach((el) => {
				el.remove()
			})
		}, 1100)
	})
</script>

<style lang="css">
	@keyframes round-image-slider-fade-in {
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	}
</style>
