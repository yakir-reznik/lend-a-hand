<template>
	<div class="bg-white pb-16">
		<div class="bg-secondary pb-14 pt-12 text-center">
			<h3 class="mb-8 text-3xl font-bold text-yellow-400">מערכי פעילות</h3>
			<h1 class="text-5xl font-bold text-white">{{ strings.mainTitle }}</h1>
			<p class="mt-2 text-xl font-light text-white">{{ strings.subtitle }}</p>
		</div>

		<div class="bg-bluegray relative flex flex-col items-center justify-center">
			<div
				class="absolute -top-10 mb-8 h-64 w-64 overflow-hidden rounded-full border-2 border-yellow-400 shadow-lg"
			>
				<img :src="strings.image" alt="Yellow bricks" class="h-64 w-64" />
			</div>

			<div class="mt-56 flex flex-col items-center text-lg">
				<p class="mt-2 text-sm text-gray-500">{{ strings.developer }}</p>
				<h2 class="mt-6 text-4xl font-bold text-gray-900">על היצירה</h2>
				<p class="mb-8 mt-4 max-w-screen-sm text-xl font-bold leading-relaxed text-gray-700">
					{{ strings.description }}
				</p>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'ActivityTopSection',
		props: {
			strings: {
				type: Object,
				required: true,
			},
		},
	}
</script>

<style scoped>
	/* Add your styles here */
</style>
