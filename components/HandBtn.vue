<template>
	<button
		class="hand-btn inline-flex items-center justify-center gap-4 rounded-full bg-primary px-12 py-4 text-xl font-bold shadow-dark-900 transition hover:bg-primary-400 active:scale-[0.975] desktop:text-2xl"
	>
		<img src="/img/one-hand.svg" alt="One hand" />
		<span><slot></slot></span>
	</button>
</template>

<script setup lang="ts"></script>

<style lang="css" scoped>
	.hand-btn {
		box-shadow: 0 6px 0 0 var(--tw-shadow-color);
		/* transition: box-shadow 100ms; */
	}
	.hand-btn:active {
		box-shadow: 0 4px 0 0 var(--tw-shadow-color);
	}
</style>
