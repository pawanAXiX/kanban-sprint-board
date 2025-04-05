<template>
    <div class="container mx-auto mt-5">
        <div class="h-full flex grid grid-cols-4 gap-2 px-4 py-4 bg-gray-400 rounded-lg" >
            <div v-for="column in columns">
                <DraggableColumn :column="column" :list="tasks[column]" />
            </div>
        </div>
    </div>
</template>


<script setup>
import DraggableColumn from "../componenet/DraggableColumn.vue";
import {onMounted, reactive, ref, watch, watchEffect} from "vue";
import {apiCall} from "../global/api.js";
const columns=ref([])
const tasks=ref({})



onMounted(async ()=>{
    const {colNames,items}=await apiCall.fetchTasks()
    columns.value=colNames;
    tasks.value=items;
})




</script>
