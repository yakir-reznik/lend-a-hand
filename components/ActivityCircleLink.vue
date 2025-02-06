<template>
	<NuxtLink :to="to" class="text-2xl font-bold text-gray-900">
		<div class="flex flex-col items-center text-center">
			<div
				class="flex h-28 w-28 items-center justify-center overflow-hidden rounded-full border-2 border-yellow-400 transition-shadow duration-300 hover:shadow-xl md:h-32 md:w-32"
			>
				<img :src="image" :alt="title" class="h-full w-full object-cover" />
			</div>
			<h3 class="mt-2 text-lg font-semibold text-gray-900">{{ title }}</h3>
			<p class="text-sm text-gray-500">{{ subtitle }}</p>
		</div>
	</NuxtLink>
</template>

<script setup lang="ts">
	import type { RouteLocationRaw } from 'vue-router'

	defineProps<{
		image: string
		title: string
		subtitle: string
		to: RouteLocationRaw
	}>()
</script>
