<template>
	<div
		class="desktop:pt-30 container mx-auto px-40 py-8 pb-24 pt-24 text-center mobile:mx-0 mobile:pl-16 mobile:pr-16"
	>
		<h2 class="mb-6 text-2xl font-bold text-gray-900 md:text-3xl mobile:text-right">רציונל מערכי הפעילות</h2>

		<div class="mx-16 grid grid-cols-1 gap-8 text-right md:grid-cols-2 mobile:mx-0">
			<div v-for="(principle, index) in principles" :key="index">
				<h3 class="text-lg font-bold text-blue-800 md:text-xl">
					{{ principle.title }}
				</h3>
				<p class="mt-2 leading-relaxed text-gray-700">
					{{ principle.description }}
				</p>
			</div>
		</div>
	</div>
</template>

<script setup>
	const principles = [
		{
			title: 'תהליך לפני תוצר',
			description:
				'תהליך היצירה בקבוצה מהווה אימון מעשי בערבות הדדית ובתמיכה בזולת, בדגש על השיתוף והחיבור בין חברי וחברות הקבוצה.',
		},
		{
			title: 'שונות כמקור לעוצמה',
			description: 'השונות בקבוצה היא חלק מהטבע האנושי, היא מאפשרת הרחבה של המבט והעצמה של פעילות היחיד.',
		},
		{
			title: 'השפעה על המרחב הציבורי והקהילה הגלובלית',
			description:
				'הצגת יצירות במרחב הציבורי, בארץ ובעולם, מחזקת את הערבות ההדדית בין ישראלים ליהודי התפוצות ומגבירה את המודעות לשחרור החטופים/ות.',
		},
		{
			title: 'תקווה וחוסן',
			description:
				'התנסות יצירתית ותוצרים המתקדמים בכפות הידיים נחשבים כסמל לערבות הדדית מעוררים תחושות של תקווה וחוסן אישי וקבוצתי.',
		},
		{
			title: 'ביטוי אישי ומסוגלות',
			description:
				'המגוון המאפיין את מערכי הפעילות מאפשר לכל אחד ואחת להתבטא בדרך ייחודית, ובכך לחזק את תחושת המסוגלות וההערבות האישית.',
		},
		{
			title: 'חיבור לערך הערבות ההדדית',
			description:
				'נעורר דיון דרך שאלות או משחק אסוציאציות למילה "קבוצה" ונשאל מה חשוב לנו כחברה. מהשיחה צפוי לעלות ערך הערבות ההדדית.',
		},
	]
</script>
