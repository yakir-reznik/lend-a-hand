<template>
	<div class="bg-white px-4 py-10 pb-20 md:px-10">
		<div class="mx-auto max-w-6xl text-center">
			<div class="grid grid-cols-1 items-start pt-6 md:grid-cols-1">
				<div class="grid grid-cols-1 gap-8 pl-10 text-right md:grid-cols-2">
					<div class="flex flex-col items-center justify-center">
						<img src="https://placehold.co/600x530" alt="Hands" class="w-full" />
					</div>
					<div class="align-center flex flex-col last:pr-10">
						<h2 class="text-right text-3xl font-bold text-gray-900">מהלך הפעילות</h2>
						<div class="mt-4 flex flex-row gap-4">
							<div
								class="flex h-8 min-h-8 w-8 min-w-8 items-center justify-center rounded-full bg-yellow-300 text-center text-lg font-bold"
							>
								1
							</div>
							<div class="flex flex-col">
								<h3 class="text-right text-lg text-gray-900 md:text-2xl">דיון ערכי</h3>
								<ul
									class="mt-2 list-inside text-right font-light leading-relaxed text-gray-700 [&>li]:relative"
								>
									<li class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']">
										נצייר את קווי המתאר של כפות הידיים על המצע.
									</li>
									<li class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']">
										ניתן לצייר לבד או בזוגות.
									</li>
									<li class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']">
										אין צורך לדייק! מה שיוצא - זה טוב.
									</li>
									<li class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']">
										נעודד יצירתיות ונקפיד לשמור על מרחב נוח לכולם.
									</li>
									<li class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']">
										השרטוט מזמן מגוון אפשרויות של יחסי קרבה ומרחק בין כפות הידיים, חפיפה בין שרטוט
										זה או ביחד, צביעה של צורות שנוצרות בין כפות הידיים, ועוד.
									</li>
								</ul>
							</div>
						</div>
						<div class="mt-4 flex flex-row gap-4">
							<div
								class="flex h-8 min-h-8 w-8 min-w-8 items-center justify-center rounded-full bg-yellow-300 text-center text-lg font-bold"
							>
								2
							</div>
							<div class="flex flex-col">
								<h3 class="text-right text-lg text-gray-900 md:text-2xl">העשרת הציור</h3>
								<ul
									class="mt-2 list-inside text-right font-light leading-relaxed text-gray-700 [&>li]:relative"
								>
									<li class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']">
										כתיבת מילים חיוביות או מסרים של תקווה בין ובתוך כפות הידיים.
									</li>
									<li class="pl-4 pr-6 before:absolute before:right-0 before:content-['•']">
										עיצוב יצירתי הכולל חפיפות בין כפות הידיים, יצירת צורות ביניהן ועוד.
									</li>
								</ul>
							</div>
						</div>
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
