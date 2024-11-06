<template>
	<Transition name="scale-in">
		<div class="py-16 text-center desktop:py-24" v-if="props.signedUp">
			<span ref="scrollAnchor" class="block -translate-y-48"></span>
			<img
				class="mx-auto mb-6"
				src="/img/two-yellow-hands-white-border.svg"
				alt="two yellow hands white border"
			/>
			<h2 class="mx-auto mb-10 text-3xl font-bold desktop:max-w-lg desktop:text-5xl">
				תודה שנתת את ידך להשבת החטופים הביתה
			</h2>
			<button
				ref="shareBtn"
				class="hand-btn inline-flex items-center justify-center gap-4 rounded-full bg-primary px-12 py-4 text-xl font-bold shadow-dark-900 transition hover:bg-primary-400 active:scale-[0.975] desktop:text-2xl"
				@click="handleClick"
			>
				<img src="/img/share.svg" alt="Share icon" />
				<span>שתפ/י חברים</span>
			</button>
		</div>
	</Transition>
	<div class="hidden">
		<div id="success-hand-svg">
			<img class="size-[2em]" src="/img/abstract-yellow-hand-3.svg" alt="hand" />
		</div>
	</div>
</template>

<script setup lang="ts">
	import useFloatingIcons from 'floating-icons'

	const props = defineProps<{
		signedUp: boolean
	}>()

	const scrollAnchor = ref<HTMLDivElement>()
	const shareBtn = ref<HTMLButtonElement>()

	onUpdated(() => {
		if (!props.signedUp) return
		if (!scrollAnchor || !shareBtn.value) return

		setTimeout(() => {
			const svg = document.getElementById('success-hand-svg') as HTMLImageElement
			useFloatingIcons({
				target: shareBtn.value!,
				minSize: '40px',
				maxSize: '60px',
				density: 1,
				distanceToTravel: '180px',
				minElementCount: 16,
				maxElementCount: 24,
				elements: [
					{
						content: svg,
						probability: 8,
					},
					{
						content: '🤍',
						probability: 1,
					},
					{
						content: '🇮🇱',
						probability: 1,
					},
				],
			})
		}, 500)

		scrollAnchor.value?.scrollIntoView({ behavior: 'smooth' })
	})

	const handleClick = () => {
		if (!navigator.share) {
			alert('הדפדפן שלך לא תומך בשיתוף')
			return
		}
		navigator.share({
			title: 'ישראלים מובילים לשחרור החטופים',
			text: 'הצטרפו גם אתם למאבק ועזרו להשיב את החטופים הביתה',
			url: 'https://notnim-yad.net/',
		})
	}
</script>

<style lang="css" scoped>
	.scale-in-enter-active,
	.scale-in-leave-active {
		transition:
			transform 0.5s ease-out,
			opacity 0.2s ease-out;
	}

	.scale-in-enter-from,
	.scale-in-leave-to {
		transform: scale(0.75);
		opacity: 0;
	}
</style>
