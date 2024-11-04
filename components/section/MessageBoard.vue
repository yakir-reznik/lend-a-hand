<template>
	<section class="overflow-hidden py-24">
		<div class="wrapper">
			<h2 class="relative mb-12 inline-block pl-8 pr-0 text-3xl font-bold">
				<span class="relative z-10">נתנו יד לאחרונה</span>
				<img
					class="absolute bottom-0 left-0 z-0 h-4 opacity-90"
					src="/img/underline.svg"
					alt="Yellow styled underline"
				/>
			</h2>

			<div v-if="isLoading">
				<Spinner />
			</div>

			<div v-else>
				<!-- Tablet and mobile -->
				<div class="desktop:hidden">
					<div v-for="row in last_10_users">
						<div class="mb-8 flex">
							<div
								class="mb-2 grid size-12 place-items-center rounded-full border-2 bg-white p-2 transition group-[.selected]:border-primary-400 group-[.selected]:bg-primary-100"
							>
								<img
									:class="{ 'w-4': row.under12, 'w-6': !row.under12 }"
									src="/img/abstract-yellow-hand-3.svg"
									alt="hand icon"
								/>
							</div>
							<div>
								<div class="flex">
									<p class="px-4 text-gray-500">{{ formatDate(row.createdAt) }}</p>
									<p class="px-4 text-gray-500">{{ formatTime(row.createdAt) }}</p>
								</div>
								<div class="flex">
									<p class="px-4 font-semibold text-mid">{{ row.initials }}</p>
									<p class="font-semibold">״{{ messages[row.messageId] || '❤️' }}״</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Desktop -->
				<table class="hidden table-auto desktop:block">
					<tbody>
						<tr v-for="row in last_10_users">
							<td class="">
								<div
									class="mb-2 grid size-12 place-items-center rounded-full border-2 bg-white p-2 transition group-[.selected]:border-primary-400 group-[.selected]:bg-primary-100"
								>
									<img
										:class="{ 'w-5': row.under12, 'w-7': !row.under12 }"
										src="/img/abstract-yellow-hand-3.svg"
										alt="hand icon"
									/>
								</div>
							</td>
							<td class="px-4 text-gray-500">{{ formatDate(row.createdAt) }}</td>
							<td class="px-4 text-gray-500">{{ formatTime(row.createdAt) }}</td>
							<td class="px-4 font-semibold text-mid">{{ row.initials }}</td>
							<td class="font-semibold">״{{ messages[row.messageId] || '❤️' }}״</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</template>

<script setup lang="ts">
	const { last_10_users, isLoading } = storeToRefs(useUserStore())

	const formatDate = (date: string) => {
		const d = new Date(date)
		return d.toLocaleDateString('he-IL', {
			day: '2-digit',
			month: 'numeric',
			year: '2-digit',
		})
	}

	const formatTime = (date: string) => {
		const d = new Date(date)
		return d.toLocaleTimeString('he-IL', {
			hour: '2-digit',
			minute: '2-digit',
		})
	}
</script>

<style lang="sass" scoped></style>
