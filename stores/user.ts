export type User = {
	email: string
	name: string
	under12: boolean
	messageId: MessageID
	createdAt: string
}

export const useUserStore = defineStore('userStore', () => {
	const loaded = ref(false)
	const isLoading = ref(false)
	const isError = ref(false)
	const total_users = ref(0)
	const last_10_users = ref<User[]>([])

	async function load() {
		try {
			// Get out if already loaded
			if (loaded.value) return

			isLoading.value = true
			const response = await fetch('http://localhost/lend-a-hand/php/users.php')
			if (response.status !== 200) throw new Error('Not 200')
			const json = await response.json()
			if (!json) throw new Error('No JSON')
			total_users.value = parseInt(json?.total_users)
			last_10_users.value = json.last_10_users as User[]
			isLoading.value = false
			loaded.value = true
		} catch (error) {
			isError.value = true
			console.error(error)
		}
	}

	return { load, isLoading, isError, total_users, last_10_users }
})
