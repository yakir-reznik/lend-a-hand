<template>
	<div class="-mt-14 px-4 py-20 md:px-10 mobile:pl-12 mobile:pr-12">
		<div class="mx-auto max-w-6xl text-center">
			<h2 class="mb-8 text-right text-2xl font-bold text-gray-900 md:text-3xl mobile:text-center">הכנה</h2>

			<div class="grid grid-cols-1 items-start md:grid-cols-1">
				<div class="grid grid-cols-1 gap-8 text-right md:grid-cols-3">
					<div v-for="(preparation, index) in preparations" :key="index">
						<div>
							<div
								class="flex h-8 min-h-8 w-8 min-w-8 items-center justify-center rounded-full bg-yellow-300 text-center text-lg font-bold mobile:mx-auto mobile:text-center"
							>
								{{ index + 1 }}
							</div>
							<h3 class="mt-4 text-right text-lg font-bold text-gray-900 md:text-2xl mobile:text-center">
								{{ preparation.fields.title }}
							</h3>
							<div
								class="mt-2 list-inside list-disc text-right leading-relaxed text-gray-700 mobile:text-center"
							>
								{{ preparation.fields.descrpition }}
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
		name: 'Preparation',
		props: {
			preparations: {
				type: Array,
				required: true,
			},
		},
	}
</script>
