<template>
	<li>
		<button class="btn py-1 transition-all" @click.capture="handleItemClick($event)">
			<p class="relative flex gap-2">
				<span class="icon relative mt-[4px] h-4 w-4"></span>
				<span class="question-text w-full text-right text-lg mobile:text-base">
					<slot name="question"></slot>
				</span>
			</p>
		</button>
		<div class="answer relative h-auto overflow-hidden px-6 text-right">
			<slot name="question"></slot>
		</div>
	</li>
</template>

<script setup lang="ts">
	function handleItemClick(e: MouseEvent) {
		let button = e.target as HTMLButtonElement
		if (!button.classList.contains('btn')) {
			// @ts-ignore
			button = e.target.closest('.btn')
		}

		console.log(button)

		button.classList.toggle('active')

		if (!button.classList.contains('active')) return
		if (false) {
			setTimeout(() => {
				const buttonTop = button.getBoundingClientRect().top
				const offsetTop = buttonTop + window.pageYOffset - 120
				window.scrollTo({
					top: offsetTop,
					behavior: 'smooth',
				})
			}, 1)
		}
	}
</script>

<style lang="sass" scoped>
	.icon:before, .icon:after
		content: ''
		position: absolute
		right: 1px
		background: #000
		width: 0.8rem
		height: 2px
		border-radius: 4px
		transform: rotate(0deg)
		transition: transform 500ms ease-out
		top: 10px

	.icon:after
		transform: rotate(90deg)

	.active .icon:before
		transform: rotate(360deg)
	.active .icon:after
		transform: rotate(360deg)

	.question-text
		transition: transform 150ms ease-out, text-shadow 150ms ease-out
		text-shadow: 1px 0 0 rgba(255,255,255,0)

	.answer
		max-height: 0rem
		transition: max-height 600ms ease-out, opacity 300ms ease-out
		opacity: 0
		&:before, &:after
			content: ''
			display: block
			height: 1.25rem
		&:before
			height: 0.25rem


	.btn.active
		.question-text
			text-shadow: 1px 0 0 currentColor
			transform: translateX(-1px)
		.answer
			opacity: 1
			max-height: 50rem
</style>
