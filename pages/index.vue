<template>
	<SectionHero />
	<SectionMahut />
	<SectionGoals />
	<SectionSignup />
	<SectionMessageBoard />
	<div style="height: 3000px"></div>
</template>

<script setup lang="ts">
	// fetch data from server
	const userStore = useUserStore()
	userStore.load()
</script>

<style lang="sass" scoped></style>
