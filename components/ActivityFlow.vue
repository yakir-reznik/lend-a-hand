<template>
	<div class="bg-white px-4 py-10 pb-20 md:px-10">
		<div class="mx-auto max-w-6xl text-center">
			<div class="grid grid-cols-1 items-start pt-6 md:grid-cols-1">
				<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-2">
					<div class="flex flex-col items-center justify-center">
						<img src="https://placehold.co/600x530" alt="Hands" class="w-full" />
					</div>
					<div class="align-center flex flex-col last:pr-10">
						<h2 class="text-right text-3xl font-bold text-gray-900">מהלך הפעילות</h2>
						<div v-for="(section, index) in sections" :key="index" class="mt-4 flex flex-row gap-4">
							<div
								class="flex h-8 min-h-8 w-8 min-w-8 items-center justify-center rounded-full bg-yellow-300 text-center text-lg font-bold"
							>
								{{ index + 1 }}
							</div>
							<div class="flex flex-col">
								<h3 class="text-right text-lg text-gray-900 md:text-2xl">{{ section.fields.title }}</h3>
								<ul
									v-if="section.fields.points"
									class="mt-2 list-inside text-right font-light leading-relaxed text-gray-700 [&>li]:relative"
								>
									<li
										v-for="(point, idx) in section.fields.points"
										:key="idx"
										class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']"
									>
										{{ point }}
									</li>
								</ul>
								<p
									v-if="section.fields.point"
									class="text-right font-light leading-relaxed text-gray-700"
								>
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
		},
	}
</script>
