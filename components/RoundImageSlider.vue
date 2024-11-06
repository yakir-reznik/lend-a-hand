<template>
	<div ref="container" class="">
		<div class="glow absolute-center aspect-square w-1/2 rounded-full tablet:w-1/3 desktop:size-[280px]"></div>
	</div>
</template>

<script setup lang="ts">
	import type { Person } from '~/composables/people'

	const props = defineProps<{
		personIndex: number
	}>()

	const container = ref<HTMLDivElement>()
	const nextEl = ref<HTMLImageElement>()

	const renderImage = () => {
		if (!container.value) return

		const currentPerson: Person = randomizedPeople[props.personIndex]

		const prevElements = container.value.querySelectorAll('img')

		let newEl: HTMLImageElement
		// if nextEl exists (not the first time this runs)
		if (nextEl.value) {
			newEl = nextEl.value
		} else {
			newEl = document.createElement('img')
			newEl.src = currentPerson.image
		}

		const classNames = 'absolute-center w-1/2 tablet:w-1/3 rounded-full desktop:size-[280px]'.split(' ')
		newEl.classList.add(...classNames)
		newEl.alt = currentPerson.name
		newEl.style.animation = 'round-image-slider-fade-in 1s forwards ease-out'
		container.value.appendChild(newEl)

		// Prefetch next image
		const nextPersonIndex = (props.personIndex + 1) % randomizedPeople.length
		nextEl.value = new Image()
		nextEl.value.src = randomizedPeople[nextPersonIndex].image

		setTimeout(() => {
			prevElements.forEach((el) => {
				el.remove()
			})
		}, 1100)
	}

	// Run the function onMount and onUpdate
	onMounted(renderImage)
	onUpdated(renderImage)
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
