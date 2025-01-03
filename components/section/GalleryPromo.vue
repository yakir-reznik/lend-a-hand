<template>
	<section class="bg-white py-24 mobile:py-16">
		<div class="wrapper">
			<p class="mb-4 text-center text-xl font-semibold text-secondary">בואו לתת יד גם במיצג הקהילתי</p>
			<h2 class="mx-auto mb-6 text-center text-4xl font-bold desktop:text-5xl">נותנים יד - יוצרים בקהילה</h2>
			<p class="mx-auto max-w-xl text-center text-xl font-semibold text-mid desktop:text-2xl">
				במה לשיתוף יצירות המשלבות את מוטיב כף היד כסמל לערבות הדדית - לקבוצות בקהילה ובמסגרות חינוך וליוזמות
				אישיות בכל הגילאים ומכל המגזרים
			</p>

			<div class="mt-12 grid grid-cols-4 gap-8 mobile:grid-cols-1">
				<a
					v-for="galleryItem in galleryItems"
					:href="galleryItem.url"
					class="group relative block aspect-video overflow-hidden rounded-md bg-gray bg-cover bg-center p-8 shadow-lg transition hover:border-primary-300 hover:bg-primary-50 active:scale-[0.975]"
					:style="`background-image:url('${galleryItem.imgUrl}');`"
				>
					<span
						class="absolute inset-0 grid items-end bg-dark-900/50 px-4 pb-3 text-lg leading-tight text-white opacity-0 transition group-hover:opacity-100"
					>
						{{ galleryItem.title }}
					</span>
				</a>
			</div>

			<div class="mt-16 text-center">
				<Btn href="https://gallery.notnim-yad.net/" class="relative z-10 mobile:text-base">
					לכל היצירות ולהעלאת יצירה חדשה
				</Btn>
			</div>
		</div>
	</section>
</template>

<script setup lang="ts">
	type GalleryItem = {
		title: string
		imgUrl: string
		url: string
	}

	const galleryItems: GalleryItem[] = [
		{
			title: 'ידיים קטנות וגדולות בשביל החטופות והחטופים',
			imgUrl: 'https://gallery.notnim-yad.net/up/uploads/thumb/1734159397_RLzuWG6fVI.jpg',
			url: 'https://gallery.notnim-yad.net/?imageId=10',
		},
		{
			title: 'כולם ביחד מושיטים ידיים לטוב',
			imgUrl: 'https://gallery.notnim-yad.net/up/uploads/thumb/1734194004_5Yq8yLf0dG.jpg',
			url: 'https://gallery.notnim-yad.net/?imageId=26',
		},
		{
			title: 'סולידריות מעבר לים',
			imgUrl: 'https://gallery.notnim-yad.net/up/uploads/thumb/1734126798_lg4STLjkOv.jpg',
			url: 'https://gallery.notnim-yad.net/?imageId=5',
		},
		{
			title: 'שמות יד ונותנות מהלב',
			imgUrl: 'https://gallery.notnim-yad.net/up/uploads/thumb/1734129267_lNOfV9h6J5.jpg',
			url: 'https://gallery.notnim-yad.net/?imageId=8',
		},
	]
</script>

<style lang="sass" scoped></style>
