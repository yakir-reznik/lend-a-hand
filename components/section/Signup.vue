<template>
	<section class="bg-gray">
		<div class="wrapper">
			<h2 class="mb-12 text-balance text-center text-4xl font-bold desktop:text-5xl">
				אני גם רוצה להצטרף ולתמוך
			</h2>
			<form @submit="handleSubmit">
				<fieldset class="flex justify-center gap-8">
					<button class="grid place-items-center transition active:scale-95" @click="data.under12 = true">
						<div
							class="mb-2 grid size-20 place-items-center rounded-full border-2 bg-white p-4 transition"
							:class="{ 'border-primary-300 bg-primary-100': data.under12 }"
						>
							<img class="w-6" src="/img/abstract-yellow-hand.svg" alt="hand icon" />
						</div>
						<label class="text-lg font-semibold">אני מתחת לגיל 12</label>
					</button>
					<button class="grid place-items-center transition active:scale-95" @click="data.under12 = false">
						<div
							class="mb-2 grid size-20 place-items-center rounded-full border-2 bg-white p-4 transition"
							:class="{ 'border-primary-400 bg-primary-100': !data.under12 }"
						>
							<img class="w-10" src="/img/abstract-yellow-hand.svg" alt="hand icon" />
						</div>
						<label class="text-lg font-semibold">אני מעל גיל 12</label>
					</button>
				</fieldset>
			</form>
		</div>
	</section>
</template>

<script setup lang="ts">
	const handleSubmit = (e: Event) => {
		e.preventDefault()
	}

	const data = reactive({
		under12: false,
	})
</script>

<style lang="sass" scoped></style>
