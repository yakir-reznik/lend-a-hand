<template>
	<div v-if="isLoading" class="flex min-h-screen items-center justify-center">
		<div class="h-16 w-16 animate-spin rounded-full border-4 border-blue-500 border-t-transparent"></div>
	</div>

	<template v-else>
		<!-- <pre style="padding-top: 100px" dir="ltr">{{ contentfulData.fields }}</pre> -->
		<ActivityTopSection
			:image="contentfulData?.mainImage?.fields?.file?.url"
			:subtitle="contentfulData?.subtitle"
			:title="contentfulData?.title"
			:developedBy="contentfulData?.developed_by"
			:about="contentfulData?.about"
		/>
		<Preparation :preparations="contentfulData?.preperation" />
		<ActivityOpeningTalk
			:sections="contentfulData?.openingTalk"
			:image="contentfulData?.openingTalkImage?.fields?.file?.url"
		/>
		<ActivityFlow :sections="contentfulData?.flow" :image="contentfulData?.flowImage?.fields?.file?.url" />
		<ActivitySummary :sections="contentfulData?.summary" :image="contentfulData?.summaryImage?.fields?.file?.url" />
		<ActivityGuidelines :sections="contentfulData?.guideline" />
		<!-- <ActivityGallery :galleryItems="activityData.galleryItems" /> -->
		<p class="mt-12 text-center text-3xl font-bold">מערכי פעילות נוספים</p>
		<ActivitiesGrid />
	</template>
</template>

<script setup lang="ts">
	import { createClient } from 'contentful'

	// Add Contentful client configuration
	// Remove this and move to ENV
	const client = createClient({
		space: 'qe20kddg0lh2',
		accessToken: 'VyxbECBy3o4f3ufGaZGU7ZfjCgyXoLAlwanHR6XUh78',
	})

	// Add new ref for Contentful data
	// There's a way to get this properly typed using contentful-cli
	// I don't know if its revelant for this project
	const contentfulData = ref<any>()

	const route = useRoute()
	const type = route.params.type.toString()

	// Add loading state
	const isLoading = ref(true)

	onMounted(async () => {
		// Navigate to activity index page if type is not found
		if (!activitiesTypes.includes(type)) {
			navigateTo('/activity-plans')
			throw createError({
				statusCode: 404,
				message: 'Activity not found',
			})
		}

		try {
			const response = await client.getEntries({
				content_type: 'activity',
				'fields.type': route.query.type,
			})

			if (response.items.length) {
				contentfulData.value = response.items[0].fields
			}
		} catch (error) {
			console.error('Error fetching data from Contentful:', error)
		} finally {
			isLoading.value = false
		}
	})

	const activitiesTypes = ['stones', 'photos', 'prints', 'outline', 'symbols']
</script>
