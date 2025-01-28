<template>
	<div class="flex flex-wrap justify-center gap-6 py-6">
		<ActivityCircleLink
			v-for="(activity, index) in activities.slice().reverse()"
			:key="index"
			:image="activity.image"
			:title="activity.title"
			:subtitle="activity.subtitle"
		/>
	</div>
</template>

<script setup>
	import ActivityCircleLink from './ActivityCircleLink.vue'

	const activities = [
		{ image: '/img/activityPlans/books.jpeg', title: 'נספחים', subtitle: 'השראות' },
		{ image: '/img/activityPlans/wings.jpeg', title: 'שילוב ידיים בסמלים', subtitle: 'כנפיים של תקווה' },
		{ image: '/img/activityPlans/hands-outline.png', title: 'כפות ידיים בקו מתאר', subtitle: 'משלבים ידיים' },
		{ image: '/img/activityPlans/handprints.jpeg', title: 'הדפסת כפות ידיים', subtitle: 'ידיים של תקווה' },
		{ image: '/img/activityPlans/hands-group.jpeg', title: 'צילום כפות ידיים', subtitle: 'נותנים יד לערבות הדדית' },
		{ image: '/img/activityPlans/yellow-stones.png', title: 'שבילי חופש מאבנים', subtitle: 'Yellow Brick Road' },
	]
</script>
