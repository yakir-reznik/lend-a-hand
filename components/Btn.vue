<template>
	<component
		:is="tagType"
		class="custom-btn inline-flex items-center justify-center gap-4 rounded-full bg-primary px-12 py-4 text-xl font-bold shadow-dark-900 transition hover:bg-primary-400 active:scale-[0.975] desktop:text-2xl"
	>
		<slot></slot>
	</component>
</template>

<script setup lang="ts">
	const attrs = useAttrs()
	const tagType = computed(() => {
		if (attrs.to) {
			return 'NuxtLink'
		}
		if (attrs.href) {
			return 'a'
		}

		return 'button'
	})
</script>

<style lang="css" scoped>
	.custom-btn {
		box-shadow: 0 6px 0 0 var(--tw-shadow-color);
	}
</style>
