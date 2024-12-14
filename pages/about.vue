<template>
	<section class="pb-10 pt-20">
		<div class="wrapper">
			<h1 class="text-center text-5xl font-bold">אודותינו</h1>
			<ul class="mt-20 desktop:mx-auto desktop:max-w-3xl">
				<FAQItem :is-open="true">
					<template #question>מה זה "נותנים יד לשחרור החטופים"?</template>
					<template #answer>
						<ul class="list-disc space-y-4 pr-4">
							<li>אתר ומיצג שמאפשר לכל אחד ואחת, להביע את תמיכתו בשחרור החטופים, מכל מקום ובכל זמן.</li>
							<li>
								המיצג היברידי, ומופיע גם במרחב הדיגיטלי וגם במרחב הקהילתי. המיצג הדיגיטלי יוקרן במקומות
								ציבוריים וניתן להצטרף אליו באתר.המיצג הקהילתי יוצג פיזית ויוקרן דיגיטלית במרחבי קהילה
								וחינוך. מובילי קהילה וחינוך מוזמנים לבחור מתוך מערכי-הפעילות שבאתר ולהנחות קבוצות ילדים,
								נוער ומבוגרים במסגרות חינוך ובמרכזי קהילה, הקבוצות יכולות להכין יצירות-ידיים ושבילי
								אבנים צהובות אל החופש. היצירות יופיעו בגלריה באתר ויוקרנו על מסכים במרחבי קהילה, חינוך
								וציבור ברחבי הארץ.
							</li>
							<li>המטרה שלנו היא שכל פעולה תחזק את החיבור והחוסן בחברה שלנו ותקדם את שחרור החטופים.</li>
						</ul>
					</template>
				</FAQItem>

				<FAQItem>
					<template #question>מי אחראי על המיצג?</template>
					<template #answer>
						<div class="space-y-4">
							<p>
								צוות מתנדבים עצמאי הכולל אנשי דיגיטל, חינוך וקהילה בהובלת איריס דואני מומחית חווית משתמש
								וד"ר דינה כהן-אור תרפיסטית בביבליותרפיה ובפסיכותרפית הצבע ומרצה לא.נשי חינוך באקדמיה.
							</p>
							<p>אנחנו גוף לא-פוליטי הפועל בהתנדבות מלאה ושואף להתחבר לכל הגוונים של הקשת הישראלית.</p>
						</div>
					</template>
				</FAQItem>

				<FAQItem>
					<template #question>איך התגבשתם ולמה?</template>
					<template #answer>
						<div class="space-y-4">
							<p>
								אחרי שנה של מלחמה, הבנו שאי אפשר להמשיך בשגרה כש-100 חטופים עדיין נמצאים בעזה. ידענו
								שרוב הישראלים תומכים בשחרור החטופים, הרבה יותר ממה שרואים ברחובות. מתוך תחושת דחיפות,
								הקמנו צוות ופיתחנו מיצג דיגיטלי וקהילתי שיביא את קול הרוב לידי ביטוי.
							</p>
							<p>
								הרעיון החל מיוזמה פרטית, הודעת וואטצאפ שהתגלגלה בקבוצות מאחת לשנייה. אחרי שיחה הבנו שיש
								רצון וצורך לייצר משהו יחד. חיפשנו דרך לעשות משהו, להשפיע, להביע את הכמיהה שלנו להחזיר את
								החטופים הביתה.
							</p>
							<p>
								הרעיון התגבש והמיזם התרחב עם הצטרפות א.נשים, מוכשרים וטובים בתחומם, שפועלים בזמנם הפרטי,
								בהתנדבות מלאה ומתוך תחושת שליחות לשחרור החטופים.
							</p>
						</div>
					</template>
				</FAQItem>

				<FAQItem>
					<template #question>מה המיצג דיגיטלי - קהילתי ייתן ואיך זה יחזיר אותם הביתה?</template>
					<template #answer>
						<div class="space-y-4">
							<p>
								כחברה, השבי הנמשך של החטופים צורב ופוגע בנו, מבוגרים וילדים. הצורך והיכולת להעניק חמלה
								ועזרה לחטופים ולרפא גם את עצמנו נמצא בידיים שלנו. פעילות היא ערכית, נגישה גם מהבית וכל
								אחד יכול לקחת בה חלק, גם ילדים ונוער.
							</p>
							<h6 class="pt-4 underline">המיצג הקהילתי:</h6>
							<p class="">
								האפשרות להביע ביצירות-ידיים אמפטיה וכאב ולהשמיע קול לתמיכה בשחרור החטופים מטעינה אותנו
								בתחושת מסוגלות ובתקווה. הידיים התומכות שלנו יוצגו במרחבים קהילתיים וחינוכיים ויהדהדו את
								המסר לקהילה. צילומי-היצירות שנעלה לאתר יוקרנו על מסכים ויפיצו 24/7 את המסר למעגלים
								נוספים.
							</p>
							<h6 class="pt-4 underline">המיצג הדיגיטלי:</h6>
							<p class="pb-4">
								מיצג חזותי של אחיותינו ואחינו החטופים עטופים בידינו התומכות ומוקרן בראשי חוצות על
								בניינים - שווה אלף מילים !האתר מאפשר בלחיצת כפתור להיות חלק ולהשמיע בעוצמה את הקול של
								רוב אזרחי ישראל. כדי להגיע לכולם, כל אחת ואחד יכולים להצטרף ולחבר חברי משפחה וחברים
								למיצג הדיגיטלי. יחד, קול ועוד קול נגיע למספר מרשים שישקף את התמיכה הישראלית בשחרור
								החטופים.
							</p>
							<p>
								המיצגים הדיגיטלי והקהילתי יוקרנו וישקפו באופן רציף וללא הפסקה את התמיכה שלנו בשחרור
								החטופים. אנחנו מאמינים שלכל מעשה, גם לקטן ביותר, יש את היכולת להשפיע ולשנות.
							</p>
							<p>
								חשוב לנו להנגיש לכולם את האפשרות לעשות שינוי ולהרגיש חלק מהתמיכה הציבורית. לפעילויות
								תמיכה קהילתית וחינוכית ברחבי ישראל ובתפוצות יש כוח לעורר הד ציבורי ולהשפיע על מקבלי
								ההחלטות.
							</p>
							<p class="italic"><span> - </span> "אחרי המעשים נמשכים הלבבות" (הרמב"ם)</p>
						</div>
					</template>
				</FAQItem>

				<FAQItem>
					<template #question>נתתי יד, מה עוד אפשר לעשות?</template>
					<template #answer>
						<div class="space-y-4">
							<p>אנו פתוחים לקבלת מתנדבים בקהילה, שיעזרו בפיתוח ובהפצת העצומה בפלטפורמות השונות.</p>
						</div>
					</template>
				</FAQItem>

				<FAQItem>
					<template #question>האם יש פעולות נוספות שמתוכננות?</template>
					<template #answer>
						<div class="space-y-4">
							<p>
								בודאי 🙂 חיבור וערבות הדדית בין קהילות נוספות מכל גווני הקשת הישראלית, לבנות עוד שבילי
								חופש שיתפרשו מעזה ועד הבית של החטוף.ה, הזמנה של משפחות חטופים לשתף ולספר על יקיריהם,
								יצירות ידיים ושבילי חופש בכל מסגרת חינוכית פורמאלי ובתנועות הנוער, ובקהילות הציבור
								החילוני, הדתי והחרדי, שת"פ עם יום אחדות ישראל, עם קהילות יהודיות בתפוצות ועוד
							</p>
						</div>
					</template>
				</FAQItem>
			</ul>
		</div>
	</section>

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
					<span class="mb-2 block text-sm text-gray-400">{{ member.desc || '-' }}</span>
					<span class="text block font-semibold text-gray-600">{{ member.position || '-' }}</span>
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
			name: 'ד״ר דינה כהן אור',
			desc: 'ביבליותרפיה, פסיכותרפית הצבע, מרצה באקדמיה',
			position: 'יוזמה, ניהול, הפקה וקהילה',
			doubleSize: true,
		},
		{
			name: 'איריס דואני',
			desc: 'מומחית UX ועיצוב UI ומרצה',
			position: 'יוזמה, הפקה בפועל וכתיבה',
			doubleSize: true,
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
			name: 'קאני נוימרק',
			position: 'קופירייטינג וכתיבה',
		},
		{
			name: 'יקיר רזניק',
			desc: 'מפתח Fullstack, מומחה UX ובניית אתרים',
			position: 'פיתוח תוכנה ובניית אתרים',
			url: 'https://thereznik.com/',
		},
		{
			name: 'מירי רבינר-גרוטו',
			position: 'הפקה קהילתית בפועל',
			desc: 'יוצרת ומחנכת לקיימות דרך אמנות',
		},
		{
			name: 'מוריה בן-דרור',
			desc: 'יזמת פרויקטורית, פעילת הרבעון הרביעי',
		},
		{
			name: 'עליזה פלורנטל',
			desc: 'תירפיסטית באמנות ואמנית רב תחומית',
		},
		{
			name: 'אדווה איזנברג',
			desc: 'תירפיסטית בתנועה',
		},
		{
			name: 'אורלי נקר',
			position: 'עריכה לשונית וספרותית',
		},
	]
</script>

<style lang="sass" scoped></style>
