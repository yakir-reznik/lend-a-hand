<template>
	<div class="relative bg-dark-900 pb-16">
		<div
			class="absolute top-0 flex w-full justify-center px-4 pb-24 pt-4 tablet:py-8 desktop:left-1/2 desktop:top-auto desktop:w-[1200px] desktop:-translate-x-1/2 desktop:px-0 desktop:pb-12"
		>
			<div class="absolute inset-0 bg-gradient-to-b from-black to-transparent desktop:hidden"></div>
			<div class="relative flex flex-col items-center text-center">
				<div
					v-if="isLoading"
					class="absolute -top-4 left-1/2 flex h-full w-full -translate-x-1/2 items-center justify-center"
				>
					<Spinner :size="40" />
				</div>
				<p
					class="dir-ltr mb-2 flex gap-1 text-3xl font-black text-dark-800 desktop:gap-2 desktop:text-5xl"
					:class="{ 'opacity-0': isLoading }"
				>
					<span
						v-for="num in days_since_oct_7th_2023.toString()"
						class="bg-primary px-2 py-[2px] desktop:p-2"
					>
						{{ num }}
					</span>
				</p>
				<h5 class="font-semibold tracking-wide text-white desktop:text-xl">ימים בשבי</h5>
				<img class="absolute -bottom-1 left-0 h-[6px]" src="/img/underline.svg" alt="Yellow styled underline" />
			</div>
		</div>
		<StarField>
			<ClientOnly>
				<RoundImageSlider :personIndex />
			</ClientOnly>
		</StarField>

		<div class="absolute bottom-0 left-0 w-full bg-dark-900/70 py-8 text-center">
			<div class="wrapper">
				<ClientOnly>
					<h2
						class="overflow-hidden text-ellipsis whitespace-nowrap text-4xl font-bold text-white desktop:text-5xl"
					>
						{{ currentPerson.name }}
					</h2>
					<p class="text-2xl font-medium text-gray-300">
						מחכה שנחזיר {{ currentPerson?.gender === 'male' ? 'אותו' : 'אותה' }} הביתה
					</p>
				</ClientOnly>
				<HandBtn class="relative z-10 -mt-4 translate-y-16" @click="handleClick">גם אני רוצה לתת יד</HandBtn>
			</div>
		</div>
	</div>
</template>

<script setup lang="ts">
	const { days_since_oct_7th_2023, total_users, isLoading } = storeToRefs(useUserStore())

	const formatted_total_users = computed(() => {
		if (total_users.value) {
			return total_users.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
		}
		return ''
	})

	const handleClick = () => {
		const el = document.querySelector('#signup-container')
		if (!el) return
		el.scrollIntoView({ behavior: 'smooth' })
	}

	const personIndex = ref(0)
	const currentPerson = computed(() => randomizedPeople[personIndex.value])

	// const hydrated = ref(false)

	onMounted(() => {
		// hydrated.value = true
		setInterval(function () {
			personIndex.value = (personIndex.value + 1) % randomizedPeople.length
		}, 6000)
	})
</script>

<style lang="css" scoped></style>
