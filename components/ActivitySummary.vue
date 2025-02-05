<template>
	<div class="bg-bluegray px-4 py-20 pb-20 md:px-10 mobile:pl-12 mobile:pr-12">
		<div class="mx-auto max-w-6xl text-center">
			<div class="grid grid-cols-1 items-start md:grid-cols-1">
				<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-2 mobile:pl-0 mobile:text-center">
					<div class="flex flex-col">
						<h2 class="text-right text-3xl font-bold text-gray-900 mobile:text-center">סיכום</h2>
						<div v-for="(section, index) in sections" :key="index" class="flex flex-col">
							<h3 class="mt-6 text-right text-lg font-bold text-gray-900 md:text-2xl mobile:text-center">
								{{ section.fields.title }}
							</h3>
							<p v-if="section.fields.intro" class="mt-2 text-right text-gray-700 mobile:text-center">
								{{ section.fields.intro }}
							</p>
							<ul
								v-if="section.fields.points"
								class="mt-2 list-inside list-none text-right leading-relaxed text-gray-700 mobile:text-center"
							>
								<li
									v-for="(point, idx) in section.fields.points"
									:key="idx"
									class="flex items-start gap-2"
								>
									<span>•</span>
									<span> {{ point }}</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="flex flex-col items-center justify-center">
						<img :src="image" alt="Hands" class="w-full" />
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
			image: {
				type: String,
				required: true,
			},
		},
	}
</script>
