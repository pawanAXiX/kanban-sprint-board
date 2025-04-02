<template>
    <div class="px-50">
    <div class="w-full h-full px-5 py-5 text-white mx-auto">
        <div class="grid grid-cols-4 px-2 gap-5 py-4   bg-[#1E2022] border border-gray-100 rounded-lg ">
                <DraggableColumn v-model:myArray="notStartedTasks.data" colName="Not Started"/>
                <DraggableColumn v-model:myArray="inProgressTasks.data" colName="In Progress"/>
                <DraggableColumn v-model:myArray="doneTasks.data" colName="Done"/>
                <DraggableColumn v-model:myArray="archivedTasks.data" colName="Archived"/>
        </div>
    </div>
    </div>
</template>


<script setup>


import axios from "axios";
import {onMounted, ref, watch} from "vue";
import DraggableColumn from "../componenet/DraggableColumn.vue";
const lists=ref({});
const notStartedTasks=ref({status:0,data:[]});

const archivedTasks=ref({status:0,data:[]});
const inProgressTasks=ref({status:0,data:[]});
const doneTasks=ref({status:0,data:[]})
const storeOrdering=ref('');
const fetchTasks=async ()=>{
    const items=await axios.get('http://localhost:8000/api/tasks')
    lists.value=items.data.data;
    const data=Object.groupBy(lists.value,({status})=>status);
    notStartedTasks.value.data=data[0];
    inProgressTasks.value.data=data[1];
    doneTasks.value.data=data[2];
    archivedTasks.value.data=data[3];


}

onMounted(()=>{
    fetchTasks();
    console.log(notStartedTasks.value)
})

const pushOrder=async ()=>{
    // send data to database
}

watch([notStartedTasks,inProgressTasks,doneTasks,archivedTasks],(newArrays,oldArrays)=>{

},)
</script>
