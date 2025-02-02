<template>
	<div v-if="isLoading" class="flex min-h-screen items-center justify-center">
		<div class="h-16 w-16 animate-spin rounded-full border-4 border-blue-500 border-t-transparent"></div>
	</div>

	<template v-else>
		<!-- <pre style="padding-top: 100px" dir="ltr">{{ contentfulData.fields }}</pre> -->
		<ActivityTopSection
			:image="contentfulData?.fields?.mainImage?.fields?.file?.url"
			:subtitle="contentfulData?.fields?.subtitle"
			:title="contentfulData?.fields?.title"
			:developedBy="contentfulData?.fields?.developed_by"
			:about="contentfulData?.fields?.about"
		/>
		<Preparation :preparations="contentfulData?.fields?.preperation" />
		<ActivityOpeningTalk
			:sections="contentfulData?.fields?.openingTalk"
			:image="contentfulData?.fields?.openingTalkImage?.fields?.file?.url"
		/>
		<ActivityFlow
			:sections="contentfulData?.fields?.flow"
			:image="contentfulData?.fields?.flowImage?.fields?.file?.url"
		/>
		<ActivitySummary
			:sections="contentfulData?.fields?.summary"
			:image="contentfulData?.fields?.summaryImage?.fields?.file?.url"
		/>
		<ActivityGuidelines :sections="contentfulData?.fields?.guideline" />
		<ActivityGallery :galleryItems="activityData.galleryItems" />
		<p class="mt-12 text-center text-3xl font-bold">מערכי פעילות נוספים</p>
		<ActivitiesGrid />
	</template>
</template>

<script setup lang="ts">
	import { useRoute, onBeforeRouteUpdate } from 'vue-router'
	import { ref, watch, computed } from 'vue'
	import { createClient } from 'contentful'

	// Add Contentful client configuration
	// Remove this and move to ENV
	const client = createClient({
		space: 'qe20kddg0lh2',
		accessToken: 'VyxbECBy3o4f3ufGaZGU7ZfjCgyXoLAlwanHR6XUh78',
	})

	// Add new ref for Contentful data
	const contentfulData = ref(null)

	const route = useRoute()
	const type = route.params.type.toString()

	// Add loading state
	const isLoading = ref(true)

	// Update onCreate function
	const onCreate = async () => {
		isLoading.value = true
		try {
			const response = await client.getEntries({
				content_type: 'activity',
				'fields.type': route.query.type,
			})

			if (response.items.length > 0) {
				contentfulData.value = response.items[0]
			}
		} catch (error) {
			console.error('Error fetching data from Contentful:', error)
		} finally {
			isLoading.value = false
		}
	}

	// Call onCreate when component is created
	onCreate()

	const activitiesTypes = ['stones', 'photos', 'prints', 'outline', 'symbols']

	// Update computed property to merge static and Contentful data
	const activityData = computed(() => {
		// Navigate to activity index page if type is not found
		if (!activitiesTypes.includes(type)) {
			navigateTo('/activity-plans')
			throw createError({
				statusCode: 404,
				message: 'Activity not found',
			})
		}
		if (contentfulData.value) {
			return {
				contentful: contentfulData.value.fields,
			}
		}
		return staticData
	})
</script>
