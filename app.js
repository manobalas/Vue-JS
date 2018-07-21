var app = new Vue({
  el: '#app',
  data: {
    appName: '',
    description: '',
    author: '',
    users: '',
    first_name: '',
    last_name: '',
    mobile_number: ''
  },
  created: function() {
        this.loadUsers();
        this.loadAppInfo();
  },
  methods: {
      loadAppInfo: function() {
            axios.get('https://domain.com/path/api.php')
            .then(function (response) {
                app.appName = response.data[0]["appName"]
                app.description = response.data[0]["description"]
                app.author = response.data[0]["author"]
            })
            .catch(function (error) {
                console.log(error);
            })
      },
      loadUsers: function() {
            axios.get('https://domain.com/path/api.php')
            .then(function (response) {
                app.users = response.data
            })
            .catch(function (error) {
                console.log(error);
            })
      },
      createUser (submitEvent) {
            axios.post('https://domain.com/path/api.php', {
                first_name: submitEvent.target.elements.first_name.value,
                last_name: submitEvent.target.elements.last_name.value,
                mobile_number: submitEvent.target.elements.mobile_number.value
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
            app.loadUsers();
      }
  }
});
