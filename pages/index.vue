<template>
	<SectionHero />
	<SectionMahut />
	<SectionGoals />
	<SectionSignup />
	<SectionGalleryPromo />
	<SectionMessageBoard />
</template>

<script setup lang="ts">
	// fetch data from server
	const userStore = useUserStore()
	userStore.load()

	// check if url has query params "auto-refresh"
	onMounted(() => {
		const autoRefresh = useRoute().query['auto-refresh'] === 'true'
		if (!autoRefresh) return

		// Reload after 1 minute
		setTimeout(() => {
			window.location.reload()
		}, 180000)
	})
</script>

<style lang="sass" scoped></style>
