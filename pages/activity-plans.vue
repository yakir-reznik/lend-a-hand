<template>
	<section class="pb-10 pt-20">
		<div class="mb-16 text-center">
			<h2
				class="relative inline-block text-balance px-2 pt-16 text-4xl font-bold mobile:w-64 desktop:pt-20 desktop:text-5xl"
			>
				<span class="relative z-10">מערכי פעילות</span>
				<img
					class="absolute -bottom-3 left-0 h-4 w-full"
					src="/img/yellow-underline-2.png"
					alt="Yellow styled underline"
				/>
			</h2>
			<p class="m-8 mx-auto text-xl tablet:max-w-xl desktop:max-w-2xl desktop:text-2xl">
				לגיל הרך, ליסודי, לנוער, למבוגרים ולקשישים
			</p>
			<p class="mx-auto mb-8 text-xl tablet:max-w-xl desktop:max-w-2xl desktop:text-2xl">
				כל אחת ואחד יכולים, בכל מקום - בפנים או בחוץ בכל מספר של משתתפים ובכל סוגי המסגרות - חברתיות, משפחתיות,
				קהילתיות וחינוכיות
			</p>
			<p class="mx-auto text-lg tablet:max-w-xl desktop:max-w-2xl desktop:text-lg">
				*חשוב לנו להבהיר שכל פניה מגדרית ברבים או ביחיד בחוברת מתייחסת לכל המגדרים.
			</p>
		</div>
		<ActivitiesGrid />
		<section class="bg-gray pb-24 pt-16 desktop:pt-24">
			<div class="wrapper text-center">
				<h2 class="relative mx-auto mb-4 text-4xl font-bold desktop:text-5xl">
					<span class="relative z-10">מטרת המיזם</span>
				</h2>
				<p class="mx-auto text-xl desktop:max-w-2xl desktop:text-2xl">
					חיזוק הערבות ההדדית בין כל חלקי החברה הישראלית
				</p>
				<p class="mx-auto mb-8 text-xl desktop:max-w-2xl desktop:text-2xl">
					והנכחת התמיכה של כולנו בשחרור החטופים.
				</p>
				<p class="mx-auto text-lg tablet:max-w-xl desktop:max-w-2xl desktop:text-lg">
					ערבות הדדית היא הדבק המלכד את החברה הישראלית רבת השבטים והחוסן המיוחד שלנו במשך אלפי שנים בתפוצות
					ובישראל. היום, בשרשרת הישראלית, החטופות והחטופים הם החוליה שהכי זקוקה לעזרתנו. חיזוק שלהם ושל
					משפחותיהם ירפא אותם ואותנו ויחזק את כולנו.
				</p>
			</div>
		</section>
		<ActivityPrinciples />
		<InitiativeSection />
		<div class="text-center">
			<h2
				class="relative inline-block text-balance px-2 pb-8 pt-16 text-2xl font-medium mobile:w-64 desktop:pt-20 desktop:text-4xl"
			>
				<div>השתתפותך במיזם תורמת</div>
				<div>לחיבור ולחוסן שלנו ומגדילה</div>
				<div class="relative flex flex-col items-center justify-center">
					<div class="z-10 text-yellow-400">{{ currentWord }}</div>
					<img
						class="bottom-4 left-0 h-4 w-40"
						src="/img/yellow-underline-2.png"
						alt="Yellow styled underline"
					/>
				</div>
			</h2>
			<ActivitiesGrid />
		</div>
	</section>
</template>
<script>
	export default {
		name: 'ActivityPlans',
		data() {
			return {
				words: ['חיבור אנושי', 'שותפות', 'אמפתיה', 'תקווה'],
				currentWordIndex: 0,
				currentWord: 'תקווה',
			}
		},
		methods: {
			updateWord() {
				this.currentWordIndex = (this.currentWordIndex + 1) % this.words.length
				this.currentWord = this.words[this.currentWordIndex]
			},
		},
		mounted() {
			this.wordInterval = setInterval(this.updateWord, 2000)
		},
		beforeUnmount() {
			clearInterval(this.wordInterval)
		},
	}
</script>

<style lang="sass" scoped></style>
