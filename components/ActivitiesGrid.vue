<template>
	<div class="flex flex-wrap justify-center gap-6 py-6 pb-24">
		<ActivityCircleLink
			v-for="(activity, index) in activities.slice().reverse()"
			:key="index"
			:image="activity.image"
			:title="activity.title"
			:subtitle="activity.subtitle"
			:to="activity.to"
		/>
	</div>
</template>

<script setup lang="ts">
	import type { RouteLocationRaw } from 'vue-router'
	import ActivityCircleLink from './ActivityCircleLink.vue'

	type Activity = {
		image: string
		title: string
		subtitle: string
		to: RouteLocationRaw
	}

	const activities: Activity[] = [
		{
			image: '/img/activityPlans/books.jpeg',
			title: 'נספחים',
			subtitle: 'תכנים, פתגמים והעשרה',
			to: { name: 'activity-type', params: { type: 'appendix' } },
		},
		{
			image: '/img/activityPlans/wings.png',
			title: 'שילוב ידיים בסמלים',
			subtitle: 'כנפיים של תקווה',
			to: { name: 'activity-type', params: { type: 'symbols' } },
		},
		{
			image: '/img/activityPlans/hands-outline.png',
			title: 'כפות ידיים בקו מתאר',
			subtitle: 'משלבים ידיים',
			to: { name: 'activity-type', params: { type: 'outline' } },
		},
		{
			image: '/img/activityPlans/handprints.jpeg',
			title: 'הדפסת כפות ידיים',
			subtitle: 'ידיים של תקווה',
			to: { name: 'activity-type', params: { type: 'prints' } },
		},
		{
			image: '/img/activityPlans/hands-group.jpeg',
			title: 'צילום כפות ידיים',
			subtitle: 'נותנים יד לערבות הדדית',
			to: { name: 'activity-type', params: { type: 'photos' } },
		},
		{
			image: '/img/activityPlans/yellow-stones.png',
			title: 'שבילי אבנים צהובות',
			subtitle: 'Yellow Brick Road',
			to: { name: 'activity-type', params: { type: 'stones' } },
		},
	]
</script>
