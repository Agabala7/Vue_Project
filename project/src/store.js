import {createStore} from 'vuex'
import axios from 'axios';
import router from "./router";

const store = createStore({

    state : {
        token : ''
    },

    getters: {

    },

    mutations: {

    },

    actions: {
        Register({commit},payload) {
            axios.post('https://identitytoolkit.googleapis.com/v1/accounts:signUp?key=AIzaSyCHXFsaPKeAmNHZQ2IcCzglW4li5RT78zQ',{
                email : payload.email,
                password : payload.password,
                returnSecureToken: true
            }).then((response) => {
                console.log(response);
                localStorage.setItem('token',response.data.idToken);
                router.replace('/');
            }).catch((err) => {
                console.log(err);
            });
        },

        Login({commit},payload) {
            axios.post('https://identitytoolkit.googleapis.com/v1/accounts:signInWithPassword?key=AIzaSyCHXFsaPKeAmNHZQ2IcCzglW4li5RT78zQ',{
                email : payload.email,
                password : payload.password,
                returnSecureToken : true
            }).then((response) => {
                console.log(response);
                localStorage.setItem('token',response.data.idToken);
                router.replace('/');
            }).catch((err) => {
                console.log(err);
            });
        },
    }
});

export default store;