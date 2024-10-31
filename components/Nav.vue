<template>
	<nav class="fixed left-0 top-0 z-20 w-full bg-primary">
		<div class="wrapper">
			<div class="flex items-center justify-between desktop:py-4">
				<h1
					class="flex items-center gap-2 whitespace-nowrap text-sm font-extrabold text-dark-900 desktop:text-2xl"
					title="ישראלים מובילים לשחרור החטופים"
				>
					<span>ישראלים מובילים</span>
					<img src="/img/open-hands.svg" class="h-4 desktop:h-6" alt="Open hands" />
					<span>לשחרור החטופים</span>
				</h1>

				<BurgerBtn @toggle="handleToggle" :is-open />

				<ul class="hidden gap-4 desktop:flex">
					<li>
						<a class="font-semibold hover:underline" href="#0">אני רוצה לתת יד</a>
					</li>
					<li class="text-dark-800/30">
						<span>|</span>
					</li>
					<li>
						<a class="font-semibold hover:underline" href="#0">יוצרים ותומכים</a>
					</li>
				</ul>
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
</style>
