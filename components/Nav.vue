<template>
	<div
		id="blanket"
		class="fixed left-0 top-0 z-20 h-screen bg-black/70 backdrop-blur-sm"
		:class="{ isOpen }"
		@click="isOpen = false"
	></div>
	<nav class="fixed left-0 top-0 z-30 w-full bg-primary">
		<div class="wrapper">
			<div class="flex items-center justify-between tablet:py-4 desktop:py-4">
				<h1
					class="flex items-center gap-2 whitespace-nowrap font-extrabold text-dark-900 tablet:text-xl desktop:text-2xl"
					title="ישראלים מובילים לשחרור החטופים"
				>
					<img src="/img/open-hands.svg" class="h-6" alt="Open hands" />

					<span>נותנים יד לשחרור החטופים</span>
				</h1>

				<BurgerBtn @toggle="handleToggle" :is-open />

				<ul class="flex gap-4 mobile:hidden">
					<li>
						<a class="font-bold underline" href="https://notnim-yad.net/">אני רוצה לתת יד</a>
					</li>
					<!-- <li>
						<a class="text-black/60 hover:underline">יוצרים ותומכים</a>
					</li> -->
				</ul>

				<!-- Mobile menu -->
				<Transition name="fade">
					<div v-if="isOpen" class="fixed left-0 top-12 hidden bg-primary mobile:block">
						<ul class="py-4">
							<li>
								<a class="px-8 font-bold underline" href="https://notnim-yad.net/">אני רוצה לתת יד</a>
							</li>
							<!-- <li class="text-dark-800/30">
								<span>|</span>
							</li>
							<li>
								<a class="px-8 text-black/60 hover:underline" href="#0">יוצרים ותומכים</a>
							</li> -->
						</ul>
					</div>
				</Transition>
			</div>
		</div>
	</nav>
</template>

<script setup lang="ts">
	const isOpen = ref(false)

	const handleToggle = () => {
		isOpen.value = !isOpen.value
	}
</script>

<style lang="css">
	body {
		@apply pt-[49px] desktop:pt-16;
	}

	#blanket:not(.isOpen) {
		@apply w-0 opacity-0;
		transition:
			opacity 0.3s 0s,
			width 0s 0.3s;
	}
	#blanket.isOpen {
		@apply w-screen opacity-100;
		transition:
			opacity 0.3s 0s,
			width 0s 0s;
	}

	.fade-enter-active,
	.fade-leave-active {
		@apply transition-opacity duration-300;
	}
	.fade-enter-from,
	.fade-leave-to {
		@apply opacity-0;
	}
</style>
