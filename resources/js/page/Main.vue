<template>
    <div class="px-50">
    <div class="w-full h-full px-5 py-5 text-white mx-auto">
        <div class="grid grid-cols-4 px-2 gap-5 py-4   bg-[#1E2022] border border-gray-100 rounded-lg ">
                <DraggableColumn v-model:myArray="test.data" colName="Not Started"/>
                <DraggableColumn v-model:myArray="inProgressTasks" colName="In Progress"/>
                <DraggableColumn v-model:myArray="doneTasks" colName="Done"/>
                <DraggableColumn v-model:myArray="archivedTasks" colName="Archived"/>
        </div>
    </div>
    </div>
</template>


<script setup>


import axios from "axios";
import {onMounted, reactive, ref, watch} from "vue";
import DraggableColumn from "../componenet/DraggableColumn.vue";
const lists=ref({});
const notStartedTasks=ref([]);

const archivedTasks=ref([]);
const inProgressTasks=ref([]);
const doneTasks=ref([])
const test=reactive({
    status:0,
    data:[]
})
const storeOrdering=ref('');
const fetchTasks=async ()=>{
    const items=await axios.get('http://localhost:8000/api/tasks')
    lists.value=items.data.data;
    const data=Object.groupBy(lists.value,({status})=>status);
    // notStartedTasks.value=data[0];
    test.data=data[0]
    inProgressTasks.value=data[1];
    doneTasks.value=data[2];
    archivedTasks.value=data[3];

}

onMounted(()=>{
    fetchTasks();
    console.log(notStartedTasks.value)
})

const pushOrder=async ()=>{
    // send data to database
}

watch([test.data,inProgressTasks,doneTasks,archivedTasks],(newArrays,oldArrays)=>{
    // newArrays.map((item)=>{
    //     item.map((task)=>{
    //
    //     })
    // })
    console.log(newArrays);
},)
</script>
