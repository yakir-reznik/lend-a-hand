<template>
	<SectionHero />
	<SectionMahut />
	<SectionGoals />
	<div class="grid grid-cols-1 grid-rows-1">
		<HandCircle :radius="200" :draw="36" :empty="12" direction="clockwise" :size="50" />
		<HandCircle :radius="120" :draw="24" :empty="8" direction="counter-clockwise" :size="50" />
	</div>
	<div style="height: 3000px"></div>
</template>

<script setup lang="ts"></script>

<style lang="sass" scoped></style>
