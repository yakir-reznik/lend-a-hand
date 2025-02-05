<template>
	<div class="bg-white px-4 py-10 pb-20 md:px-10 mobile:pl-4 mobile:pr-16">
		<div class="mx-auto max-w-6xl text-center">
			<div class="grid grid-cols-1 items-start pt-6 md:grid-cols-1">
				<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-2">
					<div class="flex flex-col items-center justify-center">
						<img :src="image" alt="Hands" class="w-full" />
					</div>
					<div class="align-center flex flex-col last:pr-10 mobile:last:pr-0">
						<h2 class="text-right text-3xl font-bold text-gray-900 mobile:text-center">מהלך הפעילות</h2>
						<div v-for="(section, index) in sections" :key="index" class="mt-4 flex flex-row gap-4">
							<div
								class="flex h-8 min-h-8 w-8 min-w-8 items-center justify-center rounded-full bg-yellow-300 text-center text-lg font-bold mobile:text-center"
							>
								{{ index + 1 }}
							</div>
							<div class="flex flex-col">
								<h3 class="text-right text-lg text-gray-900 md:text-2xl mobile:text-center">
									{{ section.fields.title }}
								</h3>
								<ul
									v-if="section.fields.points"
									class="mt-4 list-inside list-none space-y-2 text-right text-gray-700"
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
								<p v-if="section.fields.point" class="text-right text-gray-700 mobile:text-center">
									{{ section.fields.point }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'ActivityFlow',
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
