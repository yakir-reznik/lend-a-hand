<template>
	<div class="bg-bluegray px-4 py-10 pb-20 md:px-10">
		<div class="mx-auto max-w-6xl text-center">
			<div class="grid grid-cols-1 items-start md:grid-cols-1">
				<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-2">
					<div class="flex flex-col">
						<h2 class="mt-6 text-right text-3xl font-bold text-gray-900">סיכום</h2>
						<div v-for="(section, index) in sections" :key="index" class="flex flex-col">
							<h3 class="mt-6 text-right text-lg font-bold text-gray-900 md:text-2xl">
								{{ section.title }}
							</h3>
							<p v-if="section.intro" class="mt-2 text-right text-gray-700">{{ section.intro }}</p>
							<ul
								v-if="section.points"
								class="mt-2 list-inside list-disc text-right leading-relaxed text-gray-700"
							>
								<li v-for="(point, idx) in section.points" :key="idx">{{ point }}</li>
							</ul>
						</div>
					</div>
					<div class="flex flex-col items-center justify-center">
						<img src="https://placehold.co/600x530" alt="Hands" class="w-full" />
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'ActivitySummary',
		props: {
			sections: {
				type: Array,
				required: true,
			},
		},
	}
</script>
