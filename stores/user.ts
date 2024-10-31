export type User = {
	email: string
	// name: string
	initials: string
	under12: boolean
	messageId: MessageID
	createdAt: string
}

export const useUserStore = defineStore('userStore', () => {
	const apiBase =
		process.env.NODE_ENV === 'development' ? 'http://localhost/lend-a-hand/php' : 'https://yakirr12.sg-host.com/php'

	const loaded = ref(false)
	const isLoading = ref(false)
	const isError = ref(false)
	const days_since_oct_7th_2023 = ref(0)
	const total_users = ref(0)
	const last_10_users = ref<User[]>([])

	async function load() {
		try {
			// Get out if already loaded
			if (loaded.value) return

			isLoading.value = true

			const endpoint = `${apiBase}/users.php`

			const response = await fetch(endpoint)
			if (response.status !== 200) throw new Error('Not 200')
			const json = await response.json()
			if (!json) throw new Error('No JSON')
			days_since_oct_7th_2023.value = parseInt(json?.days_since_oct_7th_2023)
			total_users.value = parseInt(json?.total_users)
			last_10_users.value = json.last_10_users as User[]
			isLoading.value = false
			loaded.value = true
		} catch (error) {
			isError.value = true
			console.error(error)
		}
	}

	async function createUser<T>(user: T) {
		const endpoint = `${apiBase}/createUser.php`

		const response = fetch(endpoint, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
			},
			body: JSON.stringify(user),
		})
	}

	return { apiBase, load, isLoading, isError, days_since_oct_7th_2023, total_users, last_10_users, createUser }
})
