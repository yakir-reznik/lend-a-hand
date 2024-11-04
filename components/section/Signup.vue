<template>
	<section class="w-screen overflow-hidden bg-gray" id="signup-container">
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
								<img class="w-6" src="/img/abstract-yellow-hand-3.svg" alt="hand icon" />
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
								<img class="w-10" src="/img/abstract-yellow-hand-3.svg" alt="hand icon" />
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
					<fieldset class="">
						<label class="mb-4 mt-8 block w-full text-center text-lg font-semibold">
							אפשר גם להוסיף ברכה:
						</label>
						<div class="flex flex-wrap justify-stretch gap-2 desktop:justify-center">
							<div
								v-for="(message, messageId) in messages"
								:key="message"
								class="group grow desktop:grow-0"
								:class="{ selected: data.messageId === messageId }"
							>
								<button
									@click="data.messageId = messageId"
									class="w-full rounded-md border border-b-4 border-r-4 border-gray-300 bg-[#EFE9D8] px-4 py-2 text-lg font-semibold text-dark-800/60 transition active:scale-95 group-[.selected]:border-primary-600/60 group-[.selected]:bg-primary group-[.selected]:text-dark-800"
									type="button"
								>
									{{ message }}
								</button>
							</div>
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
	const signedUp = ref(false)

	const userStore = useUserStore()

	const handleSubmit = (e: Event) => {
		e.preventDefault()
		userStore.createUser(data)
		signedUp.value = true

		// Make it look like registered instantly but only locally
		const localUserData = {
			email: data.email,
			initials: nameToInitials(data.name),
			under12: data.under12,
			messageId: data.messageId,
			createdAt: new Date().toISOString(),
		}
		userStore.last_10_users = [localUserData, ...userStore.last_10_users]
		userStore.total_users++
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

	const nameToInitials = (name: string): string => {
		name = name.trim()
		name = name.replace(/\s+/g, ' ')

		const words = name.split(' ')

		// If 2 words or more return 2 initials
		if (words.length >= 2) {
			return words[0].charAt(0) + '.' + words[1].charAt(0)
		}
		return words[0].charAt(0)
	}
</script>

<style lang="css" scoped>
	input[type='email']:not(:placeholder-shown) {
		direction: ltr;
	}
</style>
