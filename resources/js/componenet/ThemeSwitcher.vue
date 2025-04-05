<template>
    <div class="border border-gray-500 rounded-xl inline-flex ">
        <label :class="[themeSelectStyles.label]">Switch Theme</label>
        <br>
        <select v-model="newId" :class="[themeSelectStyles.select]" @change="applyTheme()">
            <option v-for="theme in themeOptions" :value="theme.id"  >
                {{theme.name}}
            </option>
        </select>
    </div>
</template>
<script setup>
import themes from "../global/theme.js";
import {onMounted, ref} from "vue";
import {useThemeStore} from "../global/themeStore.js";
const themeStore=useThemeStore();
import {themeSelectStyles} from "../global/switchTheme.js";
const themeOptions=ref({});
const newId=ref(0);
onMounted(()=>{
    themeOptions.value=themeStore.getAllTheme;
})

function applyTheme(){
   themeStore.id=newId.value;
}


</script>
