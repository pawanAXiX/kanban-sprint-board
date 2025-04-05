<template>
    <div :class="['flex flex-col gap-10']">
        <div :class=" ['container mx-auto mt-5']">
            <div :class="['min-h-full flex grid grid-cols-4 gap-2  py-4 rounded-xl',getAppliedTheme.border,getAppliedTheme.background,getAppliedTheme.text]" >
                <div v-for="column in columns">
                    <DraggableColumn :column="column" :list="tasks[column]" />
                </div>
            </div>
            <div class="mt-10 px-4 py-4 w-80 h-25 mx-auto">
                <ThemeSwitcher/>
            </div>
        </div>
    </div>

</template>


<script setup>
import DraggableColumn from "../componenet/DraggableColumn.vue";
import {onMounted,ref} from "vue";
import {apiCall} from "../global/api.js";
import ThemeSwitcher from "../componenet/ThemeSwitcher.vue";
import {storeToRefs} from "pinia";
import {useThemeStore} from "../global/themeStore.js";

const columns=ref([])
const tasks=ref({})
const themeStore=useThemeStore();

const {getAppliedTheme}=storeToRefs(themeStore);
onMounted(async ()=>{
    const {colNames,items}=await apiCall.fetchTasks()
    columns.value=colNames;
    tasks.value=items;

});




</script>
