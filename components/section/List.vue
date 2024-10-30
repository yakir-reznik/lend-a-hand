<template>
	<section class="py-24">
		<div class="wrapper">
			<h2 class="relative mb-12 inline-block pl-8 pr-0 text-3xl font-bold">
				<span class="relative z-10">נתנו יד לאחרונה</span>
				<img
					class="absolute bottom-0 left-0 z-0 h-4 opacity-90"
					src="/img/underline.svg"
					alt="Yellow styled underline"
				/>
			</h2>
			<table>
				<tr></tr>
			</table>
		</div>
	</section>
</template>

<script setup lang="ts">
	type FeedRecord = {
		date: string
		time: string
		under12: boolean
		name: string
		messageId: MessageID
	}
	const feed: FeedRecord[] = [
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
		{
			date: '2021-08-01',
			time: '12:00',
			under12: false,
			name: 'א.ת',
			messageId: 'it_will_be_good',
		},
	]
</script>

<style lang="sass" scoped></style>
