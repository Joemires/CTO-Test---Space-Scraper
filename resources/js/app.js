// require('./bootstrap');

import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";

import { ZiggyVue } from "ziggy";
import { Ziggy } from "./ziggy";

import Echo from 'laravel-echo';

InertiaProgress.init();


window.Pusher = require('pusher-js');
// Pusher.logToConsole = true;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: window.location.hostname,
    wsPort: 6001,
    forceTLS: false,
    disableStats: true,
});


createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component("Link", Link)
            .component("Head", Head)
            .mixin({ methods: { route } })
            .mount(el);
    },
});
