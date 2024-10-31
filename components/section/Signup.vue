<template>
	<section class="bg-gray">
		<div class="wrapper">
			<SignUpSuccess :signedUp />

			<template v-if="!signedUp">
				<h2 class="mb-12 text-balance pt-24 text-center text-4xl font-bold desktop:text-5xl">
					אני גם רוצה להצטרף ולתמוך
				</h2>
				<form @submit="handleSubmit">
					<fieldset class="flex justify-center gap-8">
						<button
							class="group grid place-items-center transition active:scale-95"
							:class="{ selected: data.under12 }"
							@click="data.under12 = true"
							type="button"
						>
							<!-- bg-primary-100 -->
							<div
								class="mb-2 grid size-20 place-items-center rounded-full border-2 bg-white p-4 transition group-[.selected]:border-primary-400 group-[.selected]:bg-primary-100"
							>
								<img class="w-6" src="/img/abstract-yellow-hand.svg" alt="hand icon" />
							</div>
							<label class="text-lg font-semibold">אני מתחת לגיל 12</label>
						</button>
						<button
							class="group grid place-items-center transition active:scale-95"
							:class="{ selected: !data.under12 }"
							@click="data.under12 = false"
							type="button"
						>
							<div
								class="mb-2 grid size-20 place-items-center rounded-full border-2 bg-white p-4 transition group-[.selected]:border-primary-400 group-[.selected]:bg-primary-100"
							>
								<img class="w-10" src="/img/abstract-yellow-hand.svg" alt="hand icon" />
							</div>
							<label class="text-lg font-semibold">אני מעל גיל 12</label>
						</button>
					</fieldset>
					<fieldset class="mx-auto mt-12 px-4 desktop:max-w-sm">
						<input
							class="w-full rounded-md border border-gray-200 p-2 text-lg"
							type="text"
							placeholder="שם מלא (חובה)"
							autocomplete="name"
							v-model="data.name"
							required
						/>
					</fieldset>
					<fieldset class="mx-auto mt-8 px-4 desktop:max-w-sm">
						<input
							class="w-full rounded-md border border-gray-200 p-2 text-lg"
							type="email"
							placeholder="דוא״ל (חובה)"
							autocomplete="email"
							v-model="data.email"
							required
						/>
					</fieldset>
					<fieldset class="flex flex-wrap justify-center gap-2">
						<label class="mb-4 mt-8 block w-full text-center text-lg font-semibold"
							>אפשר גם להוסיף ברכה:</label
						>
						<div
							v-for="(message, messageId) in messages"
							:key="message"
							class="group"
							:class="{ selected: data.messageId === messageId }"
						>
							<button
								@click="data.messageId = messageId"
								class="rounded-md border border-b-4 border-r-4 border-gray-300 bg-[#EFE9D8] px-4 py-2 text-lg font-semibold text-dark-800/60 transition active:scale-95 group-[.selected]:border-primary-600/60 group-[.selected]:bg-primary group-[.selected]:text-dark-800"
								type="button"
							>
								{{ message }}
							</button>
						</div>
					</fieldset>
					<div class="mt-12 h-32 text-center">
						<HandBtn
							ref="submitBtn"
							id="signup-submit-btn"
							class="mx-auto w-5/6 desktop:w-72"
							type="submit"
						>
							צרפו אותי
						</HandBtn>
					</div>
				</form>
			</template>
		</div>
	</section>
</template>

<script setup lang="ts">
	import { useFloatingIcons } from 'floating-icons'

	const signedUp = ref(false)

	const handleSubmit = (e: Event) => {
		e.preventDefault()

		const response = fetch('http://localhost/lend-a-hand/php/createUser.php', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
			},
			body: JSON.stringify(data),
		})

		signedUp.value = true
	}

	type Data = {
		under12: boolean
		name: string
		email: string
		messageId: MessageID
	}
	const data = reactive<Data>({
		under12: false,
		name: '',
		email: '',
		messageId: 'gave_hand',
	})
</script>

<style lang="css" scoped></style>
