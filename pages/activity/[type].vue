<template>
	<ActivityTopSection :strings="activityData.top" />
	<Preparation :preparations="activityData.preparationsList" />
	<ActivityOpeningTalk :sections="activityData.openingTalkSections" />
	<ActivityFlow :sections="activityData.flowSections" />
	<ActivitySummary :sections="activityData.summarySections" />
	<ActivityGuidelines :sections="activityData.guidelineSections" />
	<ActivityGallery :galleryItems="activityData.galleryItems" />
	<p class="mt-12 text-center text-3xl font-bold">מערכי פעילות נוספים</p>
	<ActivitiesGrid />
</template>

<script setup lang="ts">
	const route = useRoute()
	const type = route.params.type.toString()

	const stonesData = {
		top: {
			mainTitle: 'שבילי חופש מאבנים',
			subtitle: 'Yellow Brick Road',
			image: '/img/activityPlans/yellow-bricks.png',
			developer: 'פיתוח: אדווה איזנברג',
			description:
				'הפעילות "שביל האבנים הצהובות" נועדה לחזק את ערך הערבות ההדדית בקרבנו ולמען החטופות והחטופים. מטרתה להעמיק את החיבור הרגשי והחברתי שלנו ושל כל מי שצופה במיצג ובתוך כך להעלות את המודעות לחשיבותה של נתינת היד לשחרורם. הפעילות מעודדת יצירתיות ושיתוף פעולה קשוב ומאפשרת לכל אחד ואחת להביא קול אישי ליצירה.',
		},
		summarySections: [
			{
				title: 'מעגל שיח',
				intro: 'נשתף בחוויות ובתובנות בעקבות הפעילות בדגש על מסרים של תקווה ואחריות חברתית ועידוד הפצתם. נשאל:',
				points: [
					'“מה למדנו מהפעילות?”',
					'“איך החיבור לשביל ולמסרים משפיע עלינו?”',
					'“האם יש לנו רעיונות נוספים ליצירתיות קבוצתית?”',
				],
			},
			{
				title: 'חשיבה להמשך',
				points: [
					'נברר עם חברי וחברות הקבוצה אם ירצו ליצור שבילים נוספים או לפתח רעיונות אחרים, כמו יצירות ידיים.',
				],
			},
			{
				title: 'תיעוד ושמירה על פרטיות',
				points: [
					'נציע רעיונות ונבחר יחד שם ליצירה המשותפת. נעלה את הצילומים לגלריה הייעודית כדי להדהד את התמיכה שלנו ולתת השראה לעוד קהילות. נא לוודא שאין צילומי פנים.',
				],
			},
		],
		galleryItems: [
			{
				image: '/img/activityPlans/yellow-gallery-1.png',
				title: '"שביל חופש" - מעזה הבית',
				subtitle: 'בהנחיית אדווה איזנברג',
			},
			{
				image: '/img/activityPlans/yellow-gallery-2.png',
				title: 'Jewish Community in Moreno',
				subtitle: 'Dolomites & Christian Evangelical Community',
			},
			{
				image: '/img/activityPlans/yellow-gallery-3.png',
				title: 'פסטיבל נווה-נאמן',
				subtitle: 'הוד השרון',
			},
			{
				image: '/img/activityPlans/yellow-gallery-4.jpeg',
				title: 'המרכז האקדמי לוינסקי',
				subtitle: 'ווינגייט',
			},
		],
		guidelineSections: [
			{
				title: 'הארות למנחה',
				points: [
					'שימו לב לכך שכל חברי הקבוצה משתתפים בפעילות בדרך כלשהי ויוצרים חיבור אישי לנושא הערבות ההדדית או למסע השחרור של החוטפים; עודדו שיתוף רגשי ודיון במשמעות הסמלים שנבחרו: האצבע, הצבע הצהוב והשביל; חשוב לשמור על אווירה רגועה ומכבדת במהלך הפעילות.',
					'במהלך הפעילות דאגו לאפשר לכל אחד ואחת לתרום תרומה ייחודית ולהתחבר באופן אישי למסרים.',
					'שמרו על אווירה נעימה ומכילה.',
					'ניתן לסיים בגלריה ולשאוב רעיונות מתערוכות השראה.',
				],
			},
			{
				title: 'נספחים',
				points: [
					'אפשר לשלב סיפורים, פתגמים, שירים ודוגמאות השראה מתוך חומרי החוברת והנספחים. (<a href="#" class="text-blue-600 underline">לינק</a>)',
				],
			},
		],
		flowSections: [
			{
				title: 'הכנת הציור',
				points: [
					'נצייר את קווי המתאר של כפות הידיים על המצע.',
					'ניתן לצייר לבד או בזוגות.',
					'אין צורך לדייק! מה שיוצא - זה טוב.',
					'נעודד יצירתיות ונקפיד לשמור על מרחב נוח לכולם.',
					'השרטוט מזמן מגוון אפשרויות של יחסי קרבה ומרחק בין כפות הידיים, חפיפה בין שרטוט זה או ביחד, צביעה של צורות שנוצרות בין כפות הידיים, ועוד.',
				],
			},
			{
				title: 'העשרת הציור',
				points: [
					'כתיבת מילים חיוביות או מסרים של תקווה בין ובתוך כפות הידיים.',
					'עיצוב יצירתי הכולל חפיפות בין כפות הידיים, יצירת צורות ביניהן ועוד.',
				],
			},
		],
		openingTalkSections: [
			{
				title: 'דיון ערכי',
				intro: 'נפתח במשחק אסוציאציות או בהצגת שאלות:',
				points: [
					'“איזו מילה מתקשרת אצלך למילים ‘קבוצה’, ‘יחד’, ‘אכפתיות’?”',
					'“מה החשיבות של חברה בעבורנו, כפרטים המשתייכים אליה?”',
					'נדון בערך הערבות ההדדית – נסביר את המושג ונציג דוגמאות.',
				],
			},
			{
				title: 'העשרה',
				intro: 'ניתן להעשיר את הדיון בסיפור קצר, בפתגם או בהצגת דמות של חוטף או חטוף בהתאמה לקבוצה.',
			},
			{
				title: 'חיבור לפעילות',
				points: [
					'עולה רעיון: “כיצד ניתן להטביע חותם של אכפתיות וערבות הדדית?”',
					'נציע שימוש יצירתי בכפות הידיים באמצעות ציור קו-תָּאָר של כפות הידיים.',
					'נאפשר לכל אחת ואחד להציע רעיונות.',
				],
			},
		],
		preparationsList: [
			{
				title: 'בחירת מיקום',
				description:
					'יש לאתר מקום מרכזי ובולט לעין להנחת שביל האבנים הצהובות, למשל בחצר בית ספר, בקרבת מרכז קהילתי או במרחב ציבורי אחר.',
			},
			{
				title: 'תכנון זמן הפעילות',
				description:
					'הפעילות מורכבת משני שלבים, כשבין השלב הראשון (צביעת האבנים) לשני (כתיבה ואיור על האבנים) נדרשת המתנה בין שעה אחת לשעות ספורות עד לייבוש מלא של הצבע . לפחות כדי לאפשר לצבע להתייבש.',
			},
			{
				title: 'חומרים נדרשים',
				description:
					'חלוקי נחל בגודל בינוני (גודל אגרוף*). צבע אקרילי צהוב (RAL1004), טושים עמידים למים (פוסקה רחב או ארטליין), מברשות צביעה, כפפות, יריעות ניילון לייבוש.רשימת שמות החטופים.*חלוקי נחל ניתן לאסוף, או לרכוש במשתלות ובחנויות חומרי בניין ויצירה, שלעתים מוכנות להעניק הנחות לטובת המטרה.',
			},
		],
	}

	const photosData = {
		top: {
			image: '/img/activityPlans/hands-group.jpeg',
			mainTitle: 'צילום כפות ידיים',
			subtitle: 'נותנים יד לערבות הדדית',
		},
	}

	const printsData = {
		top: {
			image: '/img/activityPlans/handprints.jpeg',
			mainTitle: 'הדפסת כפות ידיים',
			subtitle: 'ידיים של תקווה',
		},
	}

	const outlineData = {
		top: {
			image: '/img/activityPlans/hands-outline.png',
			mainTitle: 'כפות ידיים בקו מתאר',
			subtitle: 'משלבים ידיים',
		},
	}

	const symbolsData = {
		top: {
			image: '/img/activityPlans/wings.jpeg',
			mainTitle: 'שילוב ידיים בסמלים',
			subtitle: 'כנפיים של תקווה',
		},
	}

	const activitiesByType = {
		stones: {
			top: stonesData.top,
			galleryItems: stonesData.galleryItems,
			preparationsList: stonesData.preparationsList,
			openingTalkSections: stonesData.openingTalkSections,
			flowSections: stonesData.flowSections,
			guidelineSections: stonesData.guidelineSections,
			summarySections: stonesData.summarySections,
		},
		photos: {
			top: photosData.top,
			preparationsList: [
				/* preparations for symbols */
			],
			openingTalkSections: [
				/* opening talk sections for symbols */
			],
			flowSections: [
				/* flow sections for symbols */
			],
			summarySections: [
				/* summary sections for symbols */
			],
			guidelineSections: [
				/* guideline sections for symbols */
			],
			galleryItems: [
				/* gallery items for symbols */
			],
		},
		prints: {
			top: printsData.top,
			preparationsList: [
				/* preparations for symbols */
			],
			openingTalkSections: [
				/* opening talk sections for symbols */
			],
			flowSections: [
				/* flow sections for symbols */
			],
			summarySections: [
				/* summary sections for symbols */
			],
			guidelineSections: [
				/* guideline sections for symbols */
			],
			galleryItems: [
				/* gallery items for symbols */
			],
		},
		outline: {
			top: outlineData.top,
			preparationsList: [
				/* preparations for symbols */
			],
			openingTalkSections: [
				/* opening talk sections for symbols */
			],
			flowSections: [
				/* flow sections for symbols */
			],
			summarySections: [
				/* summary sections for symbols */
			],
			guidelineSections: [
				/* guideline sections for symbols */
			],
			galleryItems: [
				/* gallery items for symbols */
			],
		},
		symbols: {
			top: symbolsData.top,
			preparationsList: [
				/* preparations for symbols */
			],
			openingTalkSections: [
				/* opening talk sections for symbols */
			],
			flowSections: [
				/* flow sections for symbols */
			],
			summarySections: [
				/* summary sections for symbols */
			],
			guidelineSections: [
				/* guideline sections for symbols */
			],
			galleryItems: [
				/* gallery items for symbols */
			],
		},
	}

	// Navigate to activity index page if type is not found
	if (type in activitiesByType === false) {
		navigateTo('/activity-plans')
		throw createError({
			statusCode: 404,
			message: 'Activity not found',
		})
	}

	type K = keyof typeof activitiesByType
	const activityData = activitiesByType[type as K]
</script>
