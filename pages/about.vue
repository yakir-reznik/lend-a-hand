<template>
	<section class="pb-10 pt-20">
		<div class="wrapper">
			<h1 class="text-center text-5xl font-bold">תשובות ענייניות לשאלות חשובות</h1>
			<ul>
				<FAQItem>
					<template #question>
						<p class="text-2xl font-bold">מה זה ערבות הדדית?</p>
					</template>
					<template #answer>
						ערבות הדדית היא הדבק המלכד את החברה הישראלית רבת השבטים - החוסן המיוחד שלנו אלפי שנים בתפוצות
						ובישראל.
					</template>
				</FAQItem>
			</ul>
		</div>
	</section>

	<section class="pb-10 pt-20">
		<div class="wrapper">
			<p class="text-secondary font-bold">אודות המיזם</p>
			<h1 class="text-5xl font-bold">ערבות הדדית ישראל</h1>

			<div class="mt-8 flex max-w-xl flex-col gap-4 text-xl leading-8">
				<p>
					את מיזם ״ערבות ההדדית ישראל״ הקמנו על-מנת לחזק את הערבות ההדדית בין כל חלקי החברה הישראלית והנכחת
					התמיכה של כולנו בשחרור החטופים.
				</p>

				<p>
					ערבות הדדית היא הדבק המלכד את החברה הישראלית רבת השבטים - החוסן המיוחד שלנו אלפי שנים בתפוצות
					ובישראל.
				</p>

				<p>
					החטופים הם אחיותינו ואחינו הזקוקים לנו היום שנציל אותם. כולנו רקמה אנושית אחת, אם נעמוד מן הצד
					כשאחינו בסכנה - נחלש. היכולת להשמיע קול ברור למען הצלתם היא בידיים שלנו.
				</p>

				<p>
					<a class="font-bold" href="https://notnim-yad.net/">זה הזמן לתת יד, יחד.</a>
				</p>
			</div>
		</div>
	</section>

	<section class="pb-20 pt-10">
		<div class="wrapper">
			<h2 class="text-4xl font-bold">מטרות המיזם</h2>

			<div class="mt-8 flex max-w-xl flex-col gap-4 text-xl leading-8">
				<p>
					המיזם יאפשר את הבעת הערבות ההדדית להצלת החטופים, באמצעות פעילויות מוחשיות הנעשית על ידי יצירות ידיים
					קבוצתיות במרחבים קהילתיים ומוסדיים.
				</p>

				<p>
					אנו מציעים למורים ולמדריכים מגוון פעילויות יצירה באמצעות צילום, הדפסה וציור של כפות-הידיים של חברי
					הקבוצה, שיחה בעקבות טקסטים מן התרבות והתורה, התנסות במשחקים המפתחים ערבות הדדית בין חברי הקבוצה
					והחלשים בחברה.
				</p>

				<p>
					הדגש ביישום יצירות הידיים יעשה לפי החלטת המנחה בהתאמה לגיל המשתתפים ולאופי הקהילה. אפשר להתמקד בנושא
					הכללי והעמוק של ערבות הדדית ישראל, אפשר לחבר אליו את הנושא הספציפי והדחוף של ערבות הדדית לחטופים
					ועוד.
				</p>

				<p class="font-bold">נחזור להיות שלמים כשכולם חוזרים.</p>
			</div>
		</div>
	</section>

	<section class="bg-gray py-24">
		<div class="wrapper">
			<h2 class="text-4xl font-bold">חברי הצוות</h2>
			<p class="mt-2 text-primary-700/50">כל חברי הצוות פועלים כגוף עצמאי ובהתנדבות מלאה</p>

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
			name: 'מירי גרוטו',
			position: 'הפקה קהילתית בפועל',
		},
		{
			name: 'עליזה פלורנטל',
			desc: 'תירפיסטית באמנות ואמנית רב תחומית',
		},
		{
			name: 'אדווה איזנברג',
			desc: 'תירפיסטית בתנועה',
		},
	]
</script>

<style lang="sass" scoped></style>
