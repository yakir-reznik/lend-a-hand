<template>
	<section class="bg-gray py-24">
		<div class="wrapper">
			<h2 class="text-center text-4xl font-bold">חברי הצוות</h2>
			<p class="mt-2 text-center text-secondary">כל חברי הצוות פועלים כגוף עצמאי ובהתנדבות מלאה</p>

			<div class="mt-12 grid gap-8 mobile:grid-cols-1 tablet:grid-cols-2 desktop:grid-cols-4">
				<a
					v-for="member in teamMembers"
					:href="member?.url"
					target="_blank"
					class="block rounded-md border border-white bg-white p-8 shadow-lg hover:border-primary-300 hover:bg-primary-50"
					:class="{ 'tablet:col-span-2 desktop:col-span-2': member.doubleSize }"
				>
					<span class="mb-1 block text-xl font-bold">{{ member.name }}</span>
					<span
						class="mb-2 block overflow-hidden text-ellipsis whitespace-nowrap text-sm text-gray-400"
						:title="member.desc || '-'"
						>{{ member.desc || '-' }}</span
					>
					<span
						class="text block overflow-hidden text-ellipsis whitespace-nowrap font-semibold text-gray-600"
						:title="member.position || '-'"
						>{{ member.position || '-' }}</span
					>
				</a>
			</div>
		</div>
	</section>
</template>

<script setup lang="ts">
	type TeamMember = {
		name: string
		desc?: string
		position?: string
		url?: string
		doubleSize?: boolean
	}
	const teamMembers: TeamMember[] = [
		{
			name: 'מוריה בן-דרור',
			desc: 'בעלים של "שפה אחת"',
			position: 'מובילת שבילי-החופש: הפקה עיצוב וכתיבה',
			url: 'https://safa-ahat.com/',
			doubleSize: true,
		},
		{
			name: 'ד״ר דינה כהן אור',
			desc: 'ביבליותרפיה, פסיכותרפית הצבע, מרצה באקדמיה',
			position: 'יוזמה, ניהול, הפקה וקהילה',
		},
		{
			name: 'איריס דואני',
			desc: 'מומחית UX ועיצוב UI ומרצה',
			position: 'יוזמה, הפקה בפועל וכתיבה',
		},
		{
			name: 'יורי בורוכוב',
			desc: 'בעלים של סטודיו UX/UI ומרצה',
		},
		{
			name: 'קרן שפירא-בוזגלו',
			position: 'מיתוג ושפה גרפית',
		},
		{
			name: 'אלונה זוהר',
			position: 'מיתוג ושפה גרפית',
		},
		{
			name: 'יקיר רזניק',
			desc: 'מפתח Fullstack, מומחה UX ובניית אתרים',
			position: 'פיתוח תוכנה ובניית אתרים',
			url: 'https://thereznik.com/?utm_source=notnim-yad&utm_medium=referral&utm_campaign=about-page',
		},
		{
			name: 'אדיר כהן',
			desc: 'Product Designer & Fullstack Developer',
			position: 'מעצב UX & UI ומפתח Fullstack',
			url: 'https://adir.me/?utm_source=notnim-yad&utm_medium=referral&utm_campaign=about-page',
		},
		{
			name: 'קאני נוימרק',
			position: 'קופירייטינג וכתיבה',
		},
		{
			name: 'מירי רבינר-גרוטו',
			position: 'הפקה קהילתית בפועל',
			desc: 'יוצרת ומחנכת לקיימות דרך אמנות',
		},
		{
			name: 'עליזה קלבנוב פלורנטל',
			desc: 'תירפיסטית באמנות ואמנית רב תחומית',
		},
		{
			name: 'סיגל רונן',
			desc: 'עיצוב בנייה והנגשת אתרים',
		},
		{
			name: 'אלנה אריאן',
			desc: 'תירפיסטית בשילוב אמנויות ויזמית קהילה',
		},
		{
			name: 'אורלי נקר',
			desc: 'עורכת לשון',
		},
		{
			name: 'אדווה איזנברג',
			desc: 'תירפיסטית בתנועה',
		},
		{
			name: 'מיכל פוקס',
			desc: 'יועצת ארגונית, מנחה תהליכי בינוי קהילה ויזמות',
		},
		{
			name: 'מור לוין וויס',
			desc: 'עיצוב גרפי',
		},
		{
			name: 'שרון לנקרי',
			desc: 'UX & UI Designer',
		},
		{
			name: 'ניר צזנה',
			desc: 'מפתח תוכנה',
			url: 'https://nirtz.co.il/',
		},
		{
			name: 'אלמוג כשני',
			desc: 'מפתח תוכנה',
			url: 'https://almogkashany.com/',
		},
		{
			name: 'רונן בינשטוק',
			position: 'הפקה וניהול פרויקטים',
			desc: 'הפקת סרטונים',
		},
		{
			name: 'ציון רהב',
			desc: 'הפצה וקהילה',
		},
		{
			name: 'ליאור בן זקן',
			desc: 'עורך וידאו',
		},
		{
			name: 'טל קרת',
			desc: 'צלם וידאו',
		},
	]
</script>

<style lang="sass" scoped></style>
