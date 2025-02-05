<template>
	<div class="bg-white pb-16">
		<div class="bg-secondary pb-14 pt-12 text-center">
			<h3 class="mb-8 text-3xl font-bold text-yellow-400">מערכי פעילות</h3>
			<h1 class="text-5xl font-bold text-white">{{ title }}</h1>
			<p class="mt-2 text-xl font-light text-white">{{ subtitle }}</p>
		</div>

		<div class="bg-bluegray relative flex flex-col items-center justify-center">
			<div
				class="absolute -top-10 mb-8 h-64 w-64 overflow-hidden rounded-full border-2 border-yellow-400 shadow-lg"
			>
				<img :src="image" alt="Yellow bricks" class="h-64 w-64" />
			</div>

			<div class="mt-56 flex flex-col items-center text-lg">
				<p class="mt-2 text-sm text-gray-500">פיתוח: {{ developedBy }}</p>
				<h2 class="mt-6 text-4xl font-bold text-gray-900">על היצירה</h2>
				<p
					class="mb-8 mt-4 max-w-screen-sm text-center text-xl font-bold leading-relaxed text-gray-700 mobile:pl-16 mobile:pr-16"
				>
					{{ about }}
				</p>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'ActivityTopSection',
		props: {
			subtitle: {
				type: String,
				required: true,
			},
			image: {
				type: String,
				required: true,
			},
			title: {
				type: String,
				required: true,
			},
			developedBy: {
				type: String,
				required: true,
			},
			about: {
				type: String,
				required: true,
			},
		},
	}
</script>

<style scoped>
	/* Add your styles here */
</style>


sharp('hands-colors.jpeg')
  .resize(500)
  .toFormat('webp', { quality: 50 }) // Convert to WebP (smaller than PNG/JPEG)
  .toFile('hands-colors.webp');


  sharp('hands-circle-diverse.jpeg')
  .resize(500)
  .toFormat('webp', { quality: 50 }) // Convert to WebP (smaller than PNG/JPEG)
  .toFile('hands-circle-diverse.jpeg.webp');