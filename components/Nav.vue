<template>
	<nav class="fixed left-0 top-0 z-10 w-full bg-primary text-dark">
		<div class="wrapper">
			<div class="track flex items-center justify-between py-4">
				<h1 class="flex items-center gap-2 text-2xl font-extrabold" title="ישראלים מובילים לשחרור החטופים">
					<span>ישראלים מובילים</span>
					<img src="/img/open-hands.svg" class="h-8" alt="Open hands" />
					<span>לשחרור החטופים</span>
				</h1>

				<ul class="flex gap-4">
					<li>
						<a class="font-semibold hover:underline" href="#0">אני רוצה לתת יד</a>
					</li>
					<li class="text-dark/20">
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

<script setup lang="ts"></script>

<style lang="css">
	body {
		padding-top: 64px;
	}
</style>
