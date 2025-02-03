<template>
	<div
		id="blanket"
		class="fixed left-0 top-0 z-20 h-screen bg-black/70 backdrop-blur-sm"
		:class="{ isOpen }"
		@click="isOpen = false"
	></div>
	<nav class="fixed left-0 top-0 z-30 w-full bg-secondary">
		<div class="wrapper">
			<div class="flex items-center justify-between tablet:py-3 desktop:py-3">
				<NuxtLink to="/">
					<div class="flex items-center gap-2 whitespace-nowrap">
						<img src="/img/two-yellow-hands.svg" class="h-8" alt="Open hands" />
						<div>
							<h2 class="-mb-1 text-sm font-semibold text-white/80 desktop:-mb-2 desktop:text-lg">
								ערבות הדדית ישראל
							</h2>
							<h1 class="font-extrabold text-white tablet:text-xl desktop:text-2xl">
								נותנים יד לשחרור החטופים
							</h1>
						</div>
					</div>
				</NuxtLink>

				<BurgerBtn @toggle="handleToggle" :is-open />

				<ul class="flex gap-4 mobile:hidden">
					<li v-for="link in links">
						<NuxtLink
							v-if="!link.hidden"
							:to="link.url"
							:title="link.text"
							:target="link.target"
							class="text-secondary-100"
							active-class="font-bold underline text-white"
						>
							{{ link.text }}
						</NuxtLink>
					</li>
				</ul>

				<!-- Mobile menu -->
				<Transition name="fade">
					<div v-if="isOpen" class="fixed left-0 top-12 hidden bg-secondary mobile:block">
						<ul class="py-4">
							<li v-for="link in links">
								<NuxtLink
									v-if="!link.hidden"
									:to="link.url"
									:title="link.text"
									:target="link.target"
									class="block px-8 py-2 text-secondary-100"
									active-class="font-bold underline text-white"
									@click="isOpen = false"
								>
									{{ link.text }}
								</NuxtLink>
							</li>
						</ul>
					</div>
				</Transition>
			</div>
		</div>
	</nav>
</template>

<script setup lang="ts">
	type Link = {
		text: string
		url: string
		target?: '_blank'
		hidden?: boolean
	}

	const links: Link[] = [
		{
			text: 'נותנים יד באתר',
			url: '/',
		},
		{
			text: 'אודותינו',
			url: 'about',
			hidden: false,
		},
		{
			text: 'נותנים יד - יוצרים בקהילה',
			url: 'https://gallery.notnim-yad.net/',
			hidden: false,
		},
		{
			text: 'מערכי פעילות',
			url: 'activity',
			hidden: false,
		},
		{
			text: 'צרו קשר',
			url: '#0',
			hidden: true,
		},
	]

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
