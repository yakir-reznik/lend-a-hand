<template>
	<div class="mx-auto max-w-6xl p-8 text-center">
		<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-4">
			<div v-for="(item, index) in galleryItems" :key="index" class="overflow-hidden rounded-lg shadow-md">
				<img :src="item.fields.file.url" :alt="item.fields.title" class="h-60 w-full object-cover" />
				<div class="p-4">
					<h3 class="text-lg font-bold">{{ item.fields.title }}</h3>
					<p class="text-sm text-gray-600">{{ item.fields.description }}</p>
				</div>
			</div>
		</div>

		<NuxtLink to="https://gallery.notnim-yad.net/?popup=upload" class="mt-8 block">
			<button
				class="mx-auto mt-12 flex items-center rounded-full bg-primary px-6 py-3 font-bold text-black shadow-lg hover:bg-yellow-500"
			>
				<span class="text-xl">+</span>
				<span class="mr-2">להעלאת יצירה חדשה</span>
			</button>
		</NuxtLink>
	</div>
</template>

<script>
	export default {
		name: 'ActivityGallery',
		props: {
			galleryItems: {
				type: Array,
				required: true,
			},
		},
	}
</script>

<style scoped></style>
