/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import VueFab from "vue-float-action-button";

Vue.use(
    VueFab /* {
    ----------------------
    // opitons 可选iconfont图标或MaterialIcons
    iconType: 'MaterialDesign'
    // iconType: 'iconfont'
  } */
);

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueAxios from "vue-axios";
import axios from "axios";

import App from "./app.vue";

import Toasted from "vue-toasted";

Vue.use(VueAxios, axios);

import HomeComponent from "./components/HomeComponent.vue";
import ProfileComponent from "./components/ProfileComponent.vue";
import CreateComponent from "./components/CreateComponent.vue";
import Create2Component from "./components/Create2Component.vue";
import IndexComponent from "./components/IndexComponent.vue";
import EditComponent from "./components/EditComponent.vue";

const routes = [
    {
        name: "home",
        path: "/",
        component: HomeComponent
    },
    {
        name: "reg",
        path: "/reg",
        component: CreateComponent
    },
    {
        name: "reg2",
        path: "/reg2",
        component: Create2Component
    },
    {
        name: "posts",
        path: "/posts",
        component: IndexComponent
    },
    {
        name: "edit",
        path: "/edit/:id",
        component: EditComponent
    },
    {
        name: "profile",
        path: "/profile/:id",
        component: ProfileComponent
    }
];

const router = new VueRouter({ mode: "history", routes: routes });
const app = new Vue(Vue.util.extend({ router }, App)).$mount("#app");

import VuePersianDatetimePicker from "vue-persian-datetime-picker";
Vue.component("date-picker", VuePersianDatetimePicker);
