<template>
	<li class="border-b border-gray-200 last:border-b-0">
		<button
			class="btn py-3 transition-all"
			:class="{ active: props.isOpen }"
			@click.capture="handleItemClick($event)"
		>
			<p class="relative flex gap-2">
				<span class="icon relative mt-[4px] h-4 w-4"></span>
				<span class="question-text w-full pr-8 text-right text-xl">
					<slot name="question" class=""></slot>
				</span>
			</p>
		</button>
		<div class="answer relative h-auto overflow-hidden border-t border-gray-200 bg-gray-50 px-6 text-right text-lg">
			<slot name="answer"></slot>
		</div>
	</li>
</template>

<script setup lang="ts">
	const props = withDefaults(
		defineProps<{
			isOpen?: boolean
		}>(),
		{
			isOpen: false,
		}
	)

	function handleItemClick(e: MouseEvent) {
		let button = e.target as HTMLButtonElement
		if (!button.classList.contains('btn')) {
			// @ts-ignore
			button = e.target.closest('.btn')
		}

		button.classList.toggle('active')
		if (!button.classList.contains('active')) return
	}
</script>

<style lang="sass" scoped>
	.icon:before, .icon:after
		content: ''
		position: absolute
		right: 20px
		background: #000
		width: 0.8rem
		height: 2px
		border-radius: 4px
		transform: rotate(0deg)
		transition: transform 500ms ease-out
		top: 8px

	.icon:after
		transform: rotate(90deg)

	.active .icon:before
		transform: rotate(360deg)
	.active .icon:after
		transform: rotate(360deg)

	.question-text
		transition: transform 150ms ease-out, text-shadow 150ms ease-out
		// text-shadow: 2px 0 0 rgba(255,255,255,0)

	.answer
		max-height: 0rem
		transition: max-height 600ms ease-out, opacity 300ms ease-out
		opacity: 0
		&:before, &:after
			content: ''
			display: block
			height: 2rem


	.btn.active
		.question-text
			// text-shadow: 2px 0 0 currentColor
			font-weight: bold
			transform: translateX(-1px)
		& + .answer
			opacity: 1
			max-height: 110rem
</style>
