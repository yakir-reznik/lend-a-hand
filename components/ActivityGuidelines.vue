<template>
	<div class="mx-auto max-w-6xl py-20 pb-20 text-center">
		<div v-for="(section, index) in sections" :key="index">
			<h2 class="text-right text-2xl font-bold text-gray-900">{{ section.fields.title }}</h2>
			<ul class="mt-4 list-inside list-disc space-y-2 text-right text-gray-700">
				<li v-for="(point, idx) in section.fields.points" :key="idx">
					<span v-html="point"></span>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'ActivityGuidelines',
		props: {
			sections: {
				type: Array,
				required: true,
			},
		},
	}
</script>

<style scoped>
	/* Add your styles here */
</style>
