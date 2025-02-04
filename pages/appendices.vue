<template>
	<section class="pb-10">
		<div class="min-h-screen bg-white pb-16">
			<div class="bg-secondary pb-14 pt-12 text-center">
				<h3 class="mb-8 text-3xl font-bold text-yellow-400">נספחים</h3>
				<p class="mt-2 text-xl font-light text-white">תכנים, פתגמים והעשרה</p>
			</div>

			<div class="relative flex flex-col items-center justify-center bg-bluegray">
				<div
					class="absolute -top-10 mb-8 h-64 w-64 overflow-hidden rounded-full border-2 border-yellow-400 shadow-lg"
				>
					<img src="/img/activityPlans/books.jpeg" alt="Yellow bricks" class="h-64 w-64 object-cover" />
				</div>

				<div class="mt-56 flex flex-col items-center gap-4 pb-16 text-lg">
					<p class="mt-2 text-sm text-gray-500">השראות וחומרי עזר</p>

					<ul class="my-4 mt-14 flex flex-row flex-wrap justify-center gap-6 px-7">
						<li
							v-for="(item, index) in appendixItems"
							:key="index"
							class="text-md flex min-w-32 items-center justify-center rounded-full border border-yellow-400 p-2 px-4 shadow-md"
						>
							{{ item }}
						</li>
					</ul>
				</div>
			</div>
			<div class="bg-white px-4 py-20 pb-20 md:px-10">
				<div class="mx-auto max-w-6xl text-center">
					<div class="grid grid-cols-1 items-start md:grid-cols-1">
						<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-2">
							<div class="flex flex-col">
								<h2 class="text-right text-3xl font-bold text-gray-900">כף היד</h2>
								<h3 class="mt-6 text-right text-lg font-bold text-gray-900 md:text-2xl">
									סמל לערבות הדדית חותם אישי, חושי ומחבר
								</h3>
								<p class="mt-5 text-right text-gray-700">
									כף היד היא שפת הקשר האנושי, המגע האוהב והבלתי אמצעי מרגע הלידה, הקשר עם ההורים ועם
									החברים, לחיצת היד לשלום ולהסכמה.
								</p>
								<ul class="mt-5 list-inside list-disc space-y-2 text-right text-gray-700">
									<li>הקשר עם ההורים ועם החברים, לחיצת היד לשלום ולהסכמה</li>
									<li>כף היד מתכתבת עם ה"לייק" אותו אנו רגילים לסמן כאות לאהדה ברשתות חברתיות 👍</li>
									<li>כף היד יכולה לשמש "קוביית לגו" למבנים ולרעיונות (השמיים הם הגבול…)</li>
									<li>כף היד מאפשרת יצירה של פרויקטים רבים - באופן דיגיטלי, פיזי ובמרחב הציבורי</li>
								</ul>
							</div>
							<div class="flex flex-col items-center justify-center">
								<img src="/img/appendcies/hands.png" alt="Hands" class="w-full" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-bluegray px-4 py-20 pb-20 md:px-10">
				<div class="mx-auto max-w-6xl text-center">
					<div class="grid grid-cols-1 items-start md:grid-cols-1">
						<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-1">
							<div class="flex flex-col">
								<h2 class="text-right text-3xl font-bold text-gray-900">ערבות הדדית</h2>
								<p class="mt-5 text-right text-gray-700">
									הכרה באחריות והבעת תמיכה מצד הקהילה כלפי כל אחד מחבריה, ומצד כל אחד מחברי הקהילה
									כלפי הכלל. הערבות ההדדית נבחנת ביחס לחלשים בחברה: הזקנים, החולים, העניים והנזקקים
									באשר הם, והיא ערובה לחוסנה של החברה. תחושה של ערבות הדדית מגבירה שייכות ומצמצמת
									ניכור. ערבות הדדית וסולידריות חברתית תורמות לצמצום אלימות. ערבות הדדית היא ערך מורכב
									המכיל תפיסות ורגשות כמו אמפתיה, חמלה, יחס לכבוד האדם,  הזדהות, קרבה, חברות ואהבת
									אדם. הסולידריות היא ערך אוניברסלי שאותו רואות בחיוב דתות ואמונות שונות (משרד החינוך
									2020). * ראו בנספח מהי ערבות הדדית לאור פתגמים ממקורות של דתות שונות.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script setup lang="ts">
	const appendixItems = [
		'ערבות בדתות ותרבויות',
		'פתגמים',
		'העשרה',
		'ספרים ומסך מחשב',
		'ספרים ומסך מחשב',
		// Add more items here
	]
</script>

<style lang="sass" scoped></style>
