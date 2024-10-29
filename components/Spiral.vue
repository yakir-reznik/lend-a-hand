<template>
	<div class="relative mx-auto size-[500px]">
		<div id="spiralContainer" class="h-full">
			<div class="item grid place-items-center" v-for="i in 240">
				<img src="/img/yellow-hand.svg" alt="hand icon" class="w-full" />
			</div>
		</div>
		<div class="absolute-center">
			<div class="glow absolute inset-0 rounded-full"></div>
			<img src="/img/romi.jpg" alt="Romi" class="rounded-full" />
		</div>
	</div>
</template>

<script setup lang="ts">
	onMounted(() => {
		const container = document.getElementById('spiralContainer')!
		const items = container.querySelectorAll<HTMLDivElement>('.item')
		const numItems = items.length
		const radiusIncrement = 1.25 // Increase in radius for each step
		const angleIncrement = 0.2 // Angle increment for spiral rotation
		const minSize = 10 // Minimum size of items in the center
		const maxSize = 40 // Maximum size of items at the outer edge
		const sizeIncrement = (maxSize - minSize) / numItems // Gradual increase in size
		const centerX = container.offsetWidth / 2
		const centerY = container.offsetHeight / 2

		function createSpiral() {
			let radius = 0
			let angle = 0

			items.forEach((item, i) => {
				// Calculate the size for the current item
				const itemSize = minSize + i * sizeIncrement

				// Calculate each item’s x and y position in the spiral
				const x = centerX + radius * Math.cos(angle) - itemSize / 2
				const y = centerY + radius * Math.sin(angle) - itemSize / 2

				item.style.width = `${itemSize}px`
				item.style.height = `${itemSize}px`
				item.style.position = 'absolute'
				item.style.left = `${x}px`
				item.style.top = `${y}px`
				item.style.opacity = `${i / (numItems - 1)}`

				// Append the item to the container
				container.appendChild(item)

				// Update radius and angle for the next item
				radius += radiusIncrement
				angle += angleIncrement
			})
		}

		// Generate the spiral
		createSpiral()
	})
</script>

<style lang="css">
	#spiralContainer {
		animation: rotate 24s linear infinite; /* Adjust duration for rotation speed */
	}

	#spiralContainer > .item {
		transform: rotate(-70deg);
	}

	#spiralContainer > .item > img {
		animation: rotate 24s linear infinite; /* Adjust duration for rotation speed */
		animation-direction: reverse;
	}

	@keyframes rotate {
		from {
			transform: rotate(0deg);
		}
		to {
			transform: rotate(360deg);
		}
	}

	.glow {
		box-shadow: 0 0 10rem 0 rgba(117, 170, 255, 0.5);
	}
</style>
