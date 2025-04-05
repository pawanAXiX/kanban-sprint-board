import {createApp} from "vue";
import Main from "./page/Main.vue";
import {createPinia} from "pinia";


const theme =createPinia()
const app=createApp(Main);
app.use(theme)
app.mount('#app');
