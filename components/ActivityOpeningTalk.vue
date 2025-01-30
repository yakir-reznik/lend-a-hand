<template>
	<div class="bg-bluegray px-4 py-10 pb-20 md:px-10">
		<div class="mx-auto max-w-6xl text-center">
			<div class="grid grid-cols-1 items-start md:grid-cols-1">
				<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-2">
					<div class="flex flex-col">
						<div class="flex flex-col">
							<h2 class="mt-6 text-right text-3xl font-bold text-gray-900">שיחת פתיחה</h2>
							<h3 class="mt-6 text-right text-lg font-bold text-gray-900 md:text-2xl">דיון ערכי</h3>
							<p class="mt-2 text-right text-gray-700">נפתח במשחק אסוציאציות או בהצגת שאלות:</p>
							<ul class="mt-2 list-inside list-disc text-right leading-relaxed text-gray-700">
								<li>“איזו מילה מתקשרת אצלך למילים ‘קבוצה’, ‘יחד’, ‘אכפתיות’?”</li>
								<li>“מה החשיבות של חברה בעבורנו, כפרטים המשתייכים אליה?”</li>
								<li>נדון בערך הערבות ההדדית – נסביר את המושג ונציג דוגמאות.</li>
							</ul>
						</div>
						<div class="flex flex-col">
							<h3 class="mt-6 text-right text-lg font-bold text-gray-900 md:text-2xl">העשרה</h3>
							<p class="mt-2 text-right text-gray-700">
								ניתן להעשיר את הדיון בסיפור קצר, בפתגם או בהצגת דמות של חוטף או חטוף בהתאמה לקבוצה.
							</p>
						</div>
						<div class="flex flex-col">
							<h3 class="mt-6 text-right text-lg font-bold text-gray-900 md:text-2xl">חיבור לפעילות</h3>
							<ul class="mt-2 list-inside list-disc text-right leading-relaxed text-gray-700">
								<li>עולה רעיון: “כיצד ניתן להטביע חותם של אכפתיות וערבות הדדית?”</li>
								<li>נציע שימוש יצירתי בכפות הידיים באמצעות ציור קו-תָּאָר של כפות הידיים.</li>
								<li>נאפשר לכל אחת ואחד להציע רעיונות.</li>
							</ul>
						</div>
					</div>
					<div class="flex flex-col items-center justify-center">
						<img src="https://placehold.co/600x530" alt="Hands" class="w-full" />
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'Preparation',
		props: {
			preparations: {
				type: Array,
				required: true,
			},
		},
	}
</script>
