<template>
    <div class="px-50">
    <div class="w-full h-full px-5 py-5 text-white mx-auto">
        <div class="grid grid-cols-4 px-2 gap-5 py-4   bg-[#1E2022] border border-gray-100 rounded-lg ">
                <DraggableColumn :data="list"  />
<!--                <DraggableColumn :list="doneTasks" colName="Done" colId="2" />-->
<!--            <DraggableColumn :list="archivedTasks" colName="Archived" colId="3"/>-->
<!--                <DraggableColumn v-model:myArray="archivedTasks" colName="Archived" colId="3"/>-->
        </div>
    </div>
    </div>
</template>


<script setup>


import axios from "axios";
import {onMounted, reactive, ref, watch} from "vue";
import DraggableColumn from "../componenet/DraggableColumn.vue";
import colData from "../global/colData.js";
const list=ref({});


const notStartedTasks=ref([]);
const archivedTasks=ref([]);
const inProgressTasks=ref([]);
const doneTasks=ref([])

const storeOrdering=ref('');
const fetchTasks=async ()=>{
    const items=await axios.get('http://localhost:8000/api/tasks')
    list.value=items.data;
    console.log(list.value);


}

onMounted(()=>{
    fetchTasks();

})

const pushOrder=async ()=>{
    // send data to database
}


</script>
