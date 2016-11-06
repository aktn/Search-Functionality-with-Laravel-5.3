new Vue({
	el: 'body',

	data: {
		products: [],
		loading: false,
		error: false,
		query:''
	},

	methods: {
	    search: function() {
	        
	        this.error = '';

	        // empty the product array to add new ones
	        this.products = [];

	        this.loading = true;

	        // Making a get request to our API and passing the query to it.
	        this.$http.get('/api/search?q=' + this.query).then((response) => {
	            // If error found, show error msg, otherwise fill the products
	            response.body.error ? this.error = response.body.error : this.products = response.body;
	           
	            // After loading the product, switch to false
	            this.loading = false;

	            // Clear the query.
	            this.query = '';
	        });
	    }
	}
});