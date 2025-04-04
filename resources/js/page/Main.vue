<template>
    <div class="px-2 py-2 w-full">
    <div class="h-full flex grid grid-cols-4">
        <DraggableColumn :data="lists"  />
    </div>
    </div>
</template>


<script setup>


import axios from "axios";
import {onMounted, reactive, ref, watch} from "vue";
import DraggableColumn from "../componenet/DraggableColumn.vue";

const list=ref({});
const lists=ref({});
const storeOrdering=ref('');
const fetchTasks=async ()=>{
    const items=await axios.get('http://localhost:8000/api/tasks')
    list.value=items.data;
    list.value.forEach((item)=>{
        lists.value[item.status]=item.tasks;
        })
    console.log(lists.value);

}

onMounted(()=>{
    fetchTasks();

})

const pushOrder=async ()=>{
    // send data to database
}


</script>
