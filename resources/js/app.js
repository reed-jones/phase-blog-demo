/**
 * Here we will load any bootstrapping code
 * required by the rest of the app
 */
import './bootstrap'

/**
 * Here we will import the base parts of the app
 * required for everything to operate properly
 */
import Vue from "vue";

/**
 * App.vue could be anything, however this is the
 * main 'entry' for our SPA. Think of this as the global
 * layout file that wraps every other page.
 */
import App from "./App.vue";

/**
 * This is our phase-enhanced vuex store.
 */
import { store } from "./store";

/**
 * Here is our Vue Router. This is a standard vue router,
 * with a phase provided 'routes' configuration
 */
import { router } from "./router";

/**
 * Instead of mounting the app directly, we will export it now.
 * This allows phase to control enabling/disabling server side
 * rendering
 */
export default new Vue({
  store,
  router,
  render: (h) => h(App),
});
