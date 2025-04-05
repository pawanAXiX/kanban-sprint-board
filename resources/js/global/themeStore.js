import {defineStore} from "pinia";
import themes from "./theme.js";
import {computed, ref} from "vue";
export const useThemeStore = defineStore('theme', ()=>{
    let id=ref(0);
    const getAppliedTheme= computed (() => {
        return themes[id.value]
    });
    const getAllTheme=computed(()=>themes);

    return {id,getAppliedTheme,getAllTheme}

})
