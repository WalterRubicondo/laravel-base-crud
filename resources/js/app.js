require('./bootstrap');


Vue.config.devtools = true;

var app = new Vue({
  el: '#root',
  data: {
    show: false,
  },
  methods: {
    confirmation: function () {
      this.show = true;
    },
    dismiss: function () {
      this.show = false;
    }
  }
});
