<template>
	<section class="pb-10">
		<div class="min-h-screen bg-white pb-16">
			<div class="bg-secondary pb-14 pt-12 text-center">
				<h3 class="mb-8 text-3xl font-bold text-yellow-400">נספחים</h3>
				<p class="mt-2 text-xl font-light text-white">תכנים, פתגמים והעשרה</p>
			</div>

			<div class="bg-bluegray relative flex flex-col items-center justify-center">
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
								<h2 class="text-right text-3xl font-bold text-gray-900">
									{{ contentfulData?.items[0].fields.handTitle }}
								</h2>
								<h3 class="mt-6 text-right text-lg font-bold text-gray-900 md:text-2xl">
									{{ contentfulData?.items[0].fields.handSubTitle }}
								</h3>
								<p class="mt-5 text-right text-gray-700">
									<div class="text-right px-4 py-8">
  <p class="text-lg mb-6">
    כף היד היא שפת הקשר האנושי, המגע האוהב והבלתי אמצעי מרגע הלידה, הקשר עם ההורים ועם החברים, לחיצת היד לשלום ולהסכמה.
  </p>

  <ul class="space-y-4 list-inside list-disc">
    <li>
      כף היד מתכתבת עם ה"לייק" אותו אנו רגילים לסמן כאות לאהדה ברשתות חברתיות <span class="text-2xl">👍</span>
    </li>

    <li>
      כף היד יכולה לשמש "קוביית לגו" למבנים ולרעיונות (השמיים הם הגבול...)
    </li>

    <li>
      כף היד מאפשרת יצירה של פרויקטים רבים - באופן דיגיטלי, פיזי ובמרחב הציבורי
    </li>
  </ul>
</div>
								</p>
							</div>
							<div class="flex flex-col items-center justify-center">
								<img src="/img/appendcies/hands.png" alt="Hands" class="h-[260px] w-[380px] object-cover" />
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
								<h2 class="text-right text-3xl font-bold text-gray-900">
									{{ contentfulData?.items[0].fields.mutualResponsibility }}
								</h2>
								<p class="mt-5 text-right text-gray-700">
									הכרה באחריות והבעת תמיכה מצד הקהילה כלפי כל אחד מחבריה, ומצד כל אחד מחברי הקהילה כלפי הכלל.<br>

הערבות ההדדית נבחנת ביחס לחלשים בחברה: הזקנים, החולים, העניים והנזקקים כאשר הם, והיא ערובה לחוסנה של החברה.<br>

התחושה של ערבות הדדית מגבירה שייכות ומצמצמת ניכור.<br>

ערבות הדדית וסולידריות חברתית תורמות לצמצום אלימות.<br>

ערבות הדדית היא ערך מורכב המכיל תפיסות ורגשות כמו אמפתיה, חמלה, יחס לכבוד האדם, הזדהות, קרבה, חברות ואהבת אדם.<br>
הסולידריות היא ערך אוניברסלי שאותו רואות בחיוב דתות ואמונות שונות (משרד החינוך 2020).<br><br>

* ראו בנספח מהי ערבות הדדית לאור פתגמים ממקורות של דתות שונות.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="-mt-14 px-4 py-10 pb-10 md:px-10">
			<div class="mx-auto max-w-6xl text-center">
				<h2 class="mb-8 text-2xl font-bold text-gray-900 md:text-3xl">מערכי-שיעור על ערבות הדדית</h2>
				<div class="grid grid-cols-1 items-start md:grid-cols-1">
					<div class="grid grid-cols-1 gap-8 text-right md:grid-cols-3">
						<div v-for="(classRoomActivity, index) in classRoomActivities" :key="index">
							<div>
								<div
									class="flex h-8 min-h-8 w-8 min-w-8 items-center justify-center rounded-full bg-yellow-300 text-center text-lg font-bold"
								>
									{{ index + 1 }}
								</div>
								<a :href=classRoomActivity.url><h3 class="underline mt-4 text-right text-lg font-bold text-gray-900 md:text-2xl">
									{{ classRoomActivity.title }}
								</h3></a>
								<div class="mt-2 list-inside list-disc text-right leading-relaxed text-gray-700">
									{{ classRoomActivity.description }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-bluegray px-4 py-10 pb-10 md:px-10">
			<div class="mx-auto max-w-6xl text-center">
				<h2 class="mb-2 text-2xl font-bold text-gray-900 md:text-3xl">המיזם מאפשר נתינה בדרך חדשה</h2>
				<div class="grid grid-cols-1 items-start md:grid-cols-1">
					<div class="grid grid-cols-1 gap-8 text-right md:grid-cols-3">
						<div v-for="(preparation, index) in mutualResponsibilityValue" :key="index">
							<div>
								<h3 class="mt-4 text-right text-lg font-bold text-gray-900 md:text-2xl">
									{{ preparation.title }}
								</h3>
								<div class="mt-2 list-inside list-disc text-right leading-relaxed text-gray-700">
									{{ preparation.descrpition }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="px-4 py-10 pb-10 md:px-10">
			<div class="mx-auto max-w-6xl text-center">
				<h2 class="mb-8 text-2xl font-bold text-gray-900 md:text-3xl">
					רשימת שמות החטופות והחטופים עם תמונות וכתבות
				</h2>
				<div class="grid grid-cols-1 items-start md:grid-cols-1">
					<div class="grid grid-cols-1 gap-8 text-right md:grid-cols-2">
						<pre>
רשימה שמות החטופים להדפסה  
עמוד מתעדכן | מגזין גלויה
תמונות החטופים בעזה 
עמוד מתעדכן | כאן
שמות, תמונות וסיפורים של החטופים בעזה
עמוד מתעדכן | ישראל היום
						</pre
						>
						<img src="https://placehold.co/400x300?text=400x300" alt="400x300" />
					</div>
				</div>
			</div>
		</div>

		<div class="bg-bluegray px-4 py-10 pb-10 md:px-10">
			<div class="mx-auto max-w-6xl text-center">
				<h2 class="mb-8 text-2xl font-bold text-gray-900 md:text-3xl">
					להכיר את עולמם ולהתחבר לחטוף או לחטופה
				</h2>
				<h4 class="-mt-4 mb-8">הילדים והנוער בליווי המדריכים והמדריכות, המורים והמורות מוזמנים:</h4>
				<div class="grid grid-cols-1 items-start md:grid-cols-1">
					<div class="grid grid-cols-1 gap-8 text-right md:grid-cols-3">
						<div v-for="(preparation, index) in preparations" :key="index">
							<div>
								<div
									class="flex h-8 min-h-8 w-8 min-w-8 items-center justify-center rounded-full bg-yellow-300 text-center text-lg font-bold"
								>
									{{ index + 1 }}
								</div>
								<h3 class="mt-4 text-right text-lg font-bold text-gray-900 md:text-2xl">
									{{ preparation.fields.title }}
								</h3>
								<div class="mt-2 list-inside list-disc text-right leading-relaxed text-gray-700">
									{{ preparation.fields.descrpition }}
								</div>
							</div>
						</div>
					</div>
				</div>
				<p class="mt-8 text-center text-xl font-bold text-gray-700">
					"לפיכך נברא אדם יחידי בעולם, ללמד שכל המאבד נפש אחת, מעלים עליו כאילו איבד עולם מלא! וכל המקיים נפש
					אחת מעלים עליו כאילו קיים עולם מלא"
				</p>
				<span class="block pt-2 text-center text-sm text-gray-700">(משנה, סנהדרין ד', ה')</span>
				<p class="mt-8 text-center text-sm text-gray-700">
					ביטוי המתייחס לערכם הרב של חיי אדם (על פי א"א אורבך, "'כל המקיים נפש אחת...' גלגוליו של נוסח,
					תהפוכות צנזורה ועסקי מדפיסים", תרביץ, מ, תשל"א, מובא בתוך: ערכה לערבות הדדית, משרד החינוך תש"פ, ערכה
					למנהל ולמחנך).
				</p>
			</div>
		</div>
		<div class="px-4 py-10 pb-10 md:px-10">
			<div class="mx-auto max-w-6xl text-center">
				<h2 class="mb-8 text-2xl font-bold text-gray-900 md:text-3xl">פתגמים וציטוטים ממקורות שונים ביהדות</h2>
				<div class="grid grid-cols-1 items-start md:grid-cols-1">
					<div class="grid grid-cols-1 gap-8 text-right md:grid-cols-2">
						<div class="flex flex-col">
							<p class="font-bold">"כל ישראל ערבים זה בזה"</p>
							<span class="text-sm text-gray-700">(חז"ל)</span>
						</div>
						<p>
							חז"ל קבעו כלל מוסרי הלכתי שמשמעותו המקורית: הקהילה אחראית כלפי כל אחד מחבריה וכל אחד מהחברים
							אחראי כלפי הכלל. הביטוי המעשי הרווח של ערך הערבות ההדדית כיום הוא עזרה לזולת, והוא מבטא את
							אחריות הקהילה ואת אחריות כל פרט בה לשלומם ורווחתם של יתר החברים. (שמואל אבואב, מזכ"ל משרד
							החינוך תש"פ ערכה לערבות הדדית, משרד החינוך תש"פ, ערכה למנהל ולמחנך).
						</p>
						<div class="flex flex-col">
							<p class="font-bold">
								"הלא פרוס לרעב לחמך ועניים מרודים תביא בית, כי תראה ערום וכיסיתו ומבשרך לא תתעלם"
							</p>
							<span class="text-sm text-gray-700">(חז"ל)</span>
						</div>
						<p>
							חז"ל קבעו כלל מוסרי הלכתי שמשמעותו המקורית: הקהילה אחראית כלפי כל אחד מחבריה וכל אחד מהחברים
							אחראי כלפי הכלל. הביטוי המעשי הרווח של ערך הערבות ההדדית כיום הוא עזרה לזולת, והוא מבטא את
							אחריות הקהילה ואת אחריות כל פרט בה לשלומם ורווחתם של יתר החברים. (שמואל אבואב, מזכ"ל משרד
							החינוך תש"פ ערכה לערבות הדדית, משרד החינוך תש"פ, ערכה למנהל ולמחנך).
						</p>
						<div class="flex flex-col">
							<p class="font-bold">"כל ישראל ערבים זה בזה"</p>
							<span class="text-sm text-gray-700">(חז"ל)</span>
						</div>
						<p>
							חז"ל קבעו כלל מוסרי הלכתי שמשמעותו המקורית: הקהילה אחראית כלפי כל אחד מחבריה וכל אחד מהחברים
							אחראי כלפי הכלל. הביטוי המעשי הרווח של ערך הערבות ההדדית כיום הוא עזרה לזולת, והוא מבטא את
							אחריות הקהילה ואת אחריות כל פרט בה לשלומם ורווחתם של יתר החברים. (שמואל אבואב, מזכ"ל משרד
							החינוך תש"פ ערכה לערבות הדדית, משרד החינוך תש"פ, ערכה למנהל ולמחנך).
						</p>
						<div class="flex flex-col">
							<p class="font-bold">"כל ישראל ערבים זה בזה"</p>
							<span class="text-sm text-gray-700">(חז"ל)</span>
						</div>
						<p>
							חז"ל קבעו כלל מוסרי הלכתי שמשמעותו המקורית: הקהילה אחראית כלפי כל אחד מחבריה וכל אחד מהחברים
							אחראי כלפי הכלל. הביטוי המעשי הרווח של ערך הערבות ההדדית כיום הוא עזרה לזולת, והוא מבטא את
							אחריות הקהילה ואת אחריות כל פרט בה לשלומם ורווחתם של יתר החברים. (שמואל אבואב, מזכ"ל משרד
							החינוך תש"פ ערכה לערבות הדדית, משרד החינוך תש"פ, ערכה למנהל ולמחנך).
						</p>
						<div class="flex flex-col">
							<p class="font-bold">"כל ישראל ערבים זה בזה"</p>
							<span class="text-sm text-gray-700">(חז"ל)</span>
						</div>
						<p>
							חז"ל קבעו כלל מוסרי הלכתי שמשמעותו המקורית: הקהילה אחראית כלפי כל אחד מחבריה וכל אחד מהחברים
							אחראי כלפי הכלל. הביטוי המעשי הרווח של ערך הערבות ההדדית כיום הוא עזרה לזולת, והוא מבטא את
							אחריות הקהילה ואת אחריות כל פרט בה לשלומם ורווחתם של יתר החברים. (שמואל אבואב, מזכ"ל משרד
							החינוך תש"פ ערכה לערבות הדדית, משרד החינוך תש"פ, ערכה למנהל ולמחנך).
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-bluegray px-4 py-10 pb-10 md:px-10">
			<div class="mx-auto max-w-6xl text-center">
				<h2 class="mb-8 text-2xl font-bold text-gray-900 md:text-3xl">שירים</h2>
				<h3 class="-mt-4 mb-8 text-xl font-bold text-gray-900 md:text-xl">שירים לילדים צעירים</h3>
				<div class="grid grid-cols-1 items-start pb-16 md:grid-cols-3">
					<div>
						<h4 class="font-bold">חברות וערבות הדדית</h4>
						<a class="text-sm underline">למידת ערכים | מירב האוסמן</a>
					</div>
					<div>
						<h4 class="font-bold">חברות וערבות הדדית</h4>
						<a class="text-sm underline">למידת ערכים | מירב האוסמן</a>
					</div>

					<div>
						<h4 class="font-bold">חברות וערבות הדדית</h4>
						<a class="text-sm underline">למידת ערכים | מירב האוסמן</a>
					</div>
				</div>
				<div class="flex flex-col items-center justify-center gap-8 pb-8">
					<img src="https://placehold.co/52x32?text=52x32" alt="52x32" />
					<h3 class="text-xl font-bold">שירים לגילאים שונים</h3>
				</div>
				<div class="grid grid-cols-1 items-start md:grid-cols-1">
					<div class="grid grid-cols-1 gap-8 text-right md:grid-cols-2">
						<div class="flex flex-col gap-4">
							<p class="font-bold">"בסוף כל הדרכים"</p>
							<span class="text-sm font-bold text-gray-700"
								>מילים: גידי קורן, לחן: מוני ארנון וגידי קורן</span
							>
							<p>
								בסוף הדרך בסוף כל הדרכים כי שם כולם אחים ואחיות היי, בסוף כל הדרכים שוב תמצא את שביל
								הזהב שם תדע לבטח כי לא הלכת, אחינו, לשווא אם נחפש, אם שוב נאמין עוד נמצא באחד הימים אם
								נחפש, אם שוב נאמין עוד נמצא באחד הימים בסוף הדרך בסוף כל הדרכים כי שם כולם אחים ואחיות
								היי, בסוף כל הדרכים שוב תמצא את שביל הזהב היי, בסוף כל הדרכים במקום הקרוב לליבך שם תמצא
								חלום ישן שחיכה עידנים לשובך בסוף הדרך בסוף כל הדרכים כי שם כולם אחים ואחיות היי, בסוף כל
								הדרכים במקום בו העצב חולף שם תמצא מלון אורחים להשעין את גבך העייף אם נחפש, אם שוב נאמין
								עוד נמצא באחד הימים אם נחפש, אם שוב נאמין עוד נמצא באחד הימים
							</p>
						</div>
						<img class="self-center" src="https://placehold.co/560x376?text=560x376" alt="560x376" />

						<div class="flex flex-col gap-4">
							<p class="font-bold">"כנפי הרוח"</p>
							<span class="text-sm font-bold text-gray-700">
								מילים: אברהם הכהן קוק יצחק, לחן: אביגיל עמר עוזיאל</span
							>
							<p>
								בֶּן אָדָם, עֲלֵה לְמַעְלָה, עֲלֵה. עֲלֵה לְמַעְלָה, עֲלֵה, בֶּן אָדָם. עֲלֵה, לְמַעְלָה
								עָלָה. כִּי כֹּחַ עַז לָךְ, יֵשׁ לְךָ כַּנְפֵי רוּחַ, כַּנְפֵי נְשָׁרִים אַבִּירִים. אַל
								תְּכַחֵשׁ בָּם, פֶּן יְכַחֲשׁוּ לְךָ. דְּרֹשׁ אוֹתָם – דְּרֹשׁ, בֶּן אָדָם,
								וְיִמָּצְאוּ לְךָ מִיָּד
							</p>
						</div>
						<img class="self-center" src="https://placehold.co/560x376?text=560x376" alt="560x376" />

						<div class="flex flex-col gap-4">
							<p class="font-bold">"יד ביד"</p>
							<span class="text-sm font-bold text-gray-700"> מילים: בצלאל אלוני, לחן: צביקה פיק</span>
							<p>
								אם המים גועשים וחייך כה קשים אל תיפול ברוחך בוא גלה את עצמך רק בך עוצמה רבה כמעיין
								המתגבר יד ביד הן שיר חוזר שתי עיניך ועיני הן הכוח עד בלי די הן האור באפלה יד ביד אם רק
								תיתן לי יד יד ביד נצעד את כל הדרך יד ביד אם רק תיתן לי יד יד אם רק תיתן יד ביד לאורך כל
								הדרך יד ביד
							</p>
							<p>
								יד ביד לאוהבים אין תקווה לבודדים יד ביד לחיילים אל הבית שוב חוזרים שוב חוזרים יד ביד
								לנדכאים עצובי מבט תוהים אל האור במרחקים אל האור שבמרומים לתקווה בחלומות יד ביד אם רק
								תיתן לי יד... 
							</p>
						</div>
						<img class="self-center" src="https://placehold.co/560x376?text=560x376" alt="560x376" />
					</div>
				</div>
			</div>
		</div>
		<div class="-mb-16 flex flex-col px-4 py-10 pb-0 md:px-10">
			<h2 class="text-center text-2xl font-bold">מערכי פעילות נוספים</h2>
			<div class="flex flex-wrap justify-center gap-6 py-6 pb-24">
				<ActivityCircleLink
					v-for="(activity, index) in activities.slice().reverse()"
					:key="index"
					:image="activity.image"
					:title="activity.title"
					:subtitle="activity.subtitle"
					:to="activity.to"
				/>
			</div>
		</div>
	</section>
</template>

<script setup lang="ts">
	import type { RouteLocationRaw } from 'vue-router'
	import { createClient } from 'contentful'

	// Add interfaces for Contentful response
	interface LessonPlan {
		sys: {
			type: string
			linkType: string
			id: string
		}
	}

	interface AppendciesContent {
		handTitle: string
		handSubTitle: string
		handDescription: string
		mutualResponsibility: string
		mutualResponsibilityDescription: string
		lessonPlansOnMutualResponsibilityTitle: string
		lessonPlansOnMutualResponsibility: LessonPlan[]
		mutualResponsibilityInFaithsAndCulturesTitle: string
		kidnappedNamesWithPhotosArticlesTitle: string
		connectWithKidnappedTitle: string
		connectWithKidnappedSubtitle: string
		connectWithKidnappedEpilogue: string
		proverbsAndQuotesFromJewishSourcesTitle: string
		songsTitle: string
		songsChildrenSubtitle: string
		songsAllAgesTitle: string
	}

	interface ContentfulResponse {
		items: Array<{
			fields: AppendciesContent
		}>
	}

	// Add Contentful client configuration
	// Remove this and move to ENV
	const client = createClient({
		space: 'qe20kddg0lh2',
		accessToken: 'VyxbECBy3o4f3ufGaZGU7ZfjCgyXoLAlwanHR6XUh78',
	})

	// Update ref with proper typing
	const contentfulData = ref<ContentfulResponse>()

	// Add loading state
	const isLoading = ref(true)

	const appendixItems = [
		'ערבות בדתות ותרבויות',
		'פתגמים',
		'העשרה',
		'ספרים ומסך מחשב',
		'ספרים ומסך מחשב',
		// Add more items here
	]

	const mutualResponsibilityValue = [
		{
			title: "בדת הדרוזית",
			descrpition: 'حفظ اﻻخوان خفد الأخوان، "لسمر عليهم" - عرض الموجه لمجموعات مختلفة. شيطان قسم بالدر: "المسؤولية والمسؤولية لأخيك البيولوجي، لبن عمك، لأخيك الإنساني في كل مكان". من عطف الاقتباس',
		},
	]

	const classRoomActivities = [
		{
				title: 'ערכה לערבות הדדית, משרד החינוך תש"פ',
				url: '',
				description: 'להקשיב, לשמוע, לראות ולהשפיע ערכה לאנשי החינוך, תש"ף',
		},
		{
			title: 'אוגדן פעילויות (2020) מנהל חברה ונוער',
			url: '',
			description: 'מגוון נושאים: ערבות הדדית בקבוצה החברתית, שוויון הזדמנויות, הצלת חיים, יזמות תפוצות ועוד.',
		},
		{
			title: 'אוגדן פעילויות (2020) מנהל חברה ונוער',
			url: '',
			description: 'מגוון נושאים: ערבות הדדית בקבוצה החברתית, שוויון הזדמנויות, הצלת חיים, יזמות תפוצות ועוד.',
		},
	]

	const preparations = [
		{
			fields: {
				title: 'נתינה דיגיטלית',
				descrpition: 'נתינה באמצעות טכנולוגיה דיגיטלית מאפשרת לתת בקלות ובמהירות, תוך שמירה על פרטיות ונוחות.',
			},
		},
		{
			fields: {
				title: 'נתינה קהילתית',
				descrpition: 'יצירת קהילה תומכת המאפשרת לחבריה לתת ולקבל עזרה באופן הדדי ומכבד.',
			},
		},
		{
			fields: {
				title: 'נתינה יצירתית',
				descrpition:
					'פיתוח דרכים חדשות ויצירתיות לעזור לאחרים, תוך שימוש בכישורים וביכולות הייחודיים של כל אחד.',
			},
		},
	]

	type Activity = {
		image: string
		title: string
		subtitle: string
		to: RouteLocationRaw
	}

	const activities: Activity[] = [
		{
			image: '/img/activityPlans/wings.png',
			title: 'שילוב ידיים בסמלים',
			subtitle: 'כנפיים של תקווה',
			to: { name: 'activity-type', params: { type: 'symbols' } },
		},
		{
			image: '/img/activityPlans/hands-outline.png',
			title: 'כפות ידיים בקו מתאר',
			subtitle: 'משלבים ידיים',
			to: { name: 'activity-type', params: { type: 'outline' } },
		},
		{
			image: '/img/activityPlans/handprints.jpeg',
			title: 'הדפסת כפות ידיים',
			subtitle: 'ידיים של תקווה',
			to: { name: 'activity-type', params: { type: 'prints' } },
		},
		{
			image: '/img/activityPlans/hands-group.jpeg',
			title: 'צילום כפות ידיים',
			subtitle: 'נותנים יד לערבות הדדית',
			to: { name: 'activity-type', params: { type: 'photos' } },
		},
		{
			image: '/img/activityPlans/yellow-stones.png',
			title: 'שבילי חופש מאבנים',
			subtitle: 'Yellow Brick Road',
			to: { name: 'activity-type', params: { type: 'stones' } },
		},
	]

	// Update the onMounted function to handle loading state
	onMounted(async () => {
		try {
			isLoading.value = true
			const response = await client.getEntries({
				content_type: 'appendices',
			})

			if (response.items.length) {
				contentfulData.value = response as unknown as ContentfulResponse
				console.log(contentfulData.value)
			}
		} catch (error) {
			console.error('Error fetching data from Contentful:', error)
		} finally {
			isLoading.value = false
		}
	})
</script>

<style lang="sass" scoped></style>
