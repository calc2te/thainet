
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// window.VueMasonryPlugin = require('vue-masonry');
window.VueMasonry = require('vue-masonry-css');

// Vue.use(VueMasonryPlugin);
// Vue.use(VueMasonry);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('image-upload',require('./components/ImageUpload.vue'));
Vue.component('store-add-form', require('./components/StoreAdd.vue'));

// Vue.component('review-component', require('./components/ReviewComponent'));
// Vue.component('masonry', require('vue-masonry-css');))
Vue.component('review-component2', require('./components/ReviewComponent2'));

Vue.component('modal', {
    template: '#modal-template',
    props: ['show'],
    data: function() {
        return {
            email: '',
            password: '',
            password2: ''
        };
    },
    methods: {
        close: function () {
            this.$emit('close');
        }
    },
    mounted: function() {
        document.addEventListener("keydown", (e) => {
            if (this.show && e.keyCode == 27) {
                this.close();
            }
        });
    }
});

Vue.component('NewRegisterModal', {
    template: '#new-register-modal-template',
    props: ['show'],
    data: function() {
        return {
            email: '',
            password: '',
            password2: ''
        };
    },
    methods: {
        savePost: function () {
            // Some save logic goes here...

            //this.$emit('close');
            axios.post('/users/register', {
                    email: this.email,
                    password: this.password
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (err) {
                    console.log(err);
                });
        },
        close: function () {
            this.$emit('close');
            this.email = '',
            this.password = '',
            this.password2 = ''
        }
    }
});

Vue.component('NewLoginModal', {
    template: '#new-login-modal-template',
    props: ['show'],
    data: function() {
        return {
            email: '',
            password: ''
        };
    },
    methods: {
        savePost: function () {
            // Some save logic goes here...

            this.$emit('close');
        },
        close: function () {
            this.$emit('close');
            this.email = '',
            this.password = ''
        }
    }
});

const app = new Vue({
    el: '#app',

    data: {
        showRegisterModal: false,
        showLoginModal: false,

    },
    methods: {
        location: function(location) {
            if (location === "전체") {
                location = '';
            }
            window.location.href = '/list/location/' + location
        }
    }
});
