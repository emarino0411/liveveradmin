axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

Vue.component('merchants', {

	props: ['merchants_list'],

	data() {
		return {
			merchants: {
				logo: '',
				name: '',
				description: '',
				welcome: '',
				status: '',
			}
		}
	}
});