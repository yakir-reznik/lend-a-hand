<template>
	<div class="flex flex-col items-center text-center">
		<div
			class="flex h-28 w-28 items-center justify-center overflow-hidden rounded-full border-2 border-yellow-400 md:h-32 md:w-32"
		>
			<img :src="image" :alt="title" class="h-full w-full object-cover" />
		</div>
		<h3 class="mt-2 text-lg font-semibold text-gray-900">{{ title }}</h3>
		<p class="text-sm text-gray-500">{{ subtitle }}</p>
	</div>
</template>

<script setup>
	defineProps({
		image: String,
		title: String,
		subtitle: String,
	})
</script>
