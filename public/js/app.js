Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#guestbook',

	data: {
		newMessage: {
			name: "",
			message: ""
		},

		submitted: false

	},

	computed: {
		errors: function(){
			for(var key in this.newMessage){
				if( !this.newMessage[key]) return true;
			}


			return false;
		}


	},

	ready: function(){
		this.fetchMessages();
	},

	methods: {
		fetchMessages: function(){
			this.$http.get('/api/messages', function(messages){
				this.$set('messages',messages);
			});
		},

		onSubmit: function(e){
			e.preventDefault();

			var message = this.newMessage;

			//add new message into messages array
            this.messages.push(message);
			// reset input value
			this.newMessage = {neme:'', message:''};

			//send post request
			this.$http.post('/api/messages', message);

			// show success message: Merci!
		    this.submitted = true;

		}
	}

});