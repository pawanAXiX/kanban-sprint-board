<template>
    <div>
        <div>
            <div>
<!--                <Draggable :myArray="notStartedTasks"/>-->
            </div>
<!--            <div>-->
<!--                <Draggable :myArray="inProgressTasks"/>-->
<!--            </div>-->
<!--            <div>-->
<!--                <Draggable :myArray="doneTasks"/>-->
<!--            </div>-->
<!--            <div>-->
<!--                <Draggable :myArray="archivedTasks"/>-->
<!--            </div>-->
        </div>
    </div>
</template>


<script setup>


import axios from "axios";
import {onMounted, ref} from "vue";
import Draggable from "../componenet/Draggable.vue";
const lists=ref({});
const notStartedTasks=ref([]);
const archivedTasks=ref([]);
const inProgressTasks=ref([]);
const doneTasks=ref([]);
const fetchTasks=async ()=>{
    const items=await axios.get('http://localhost:8000/api/tasks')
    lists.value=items.data.data;
    const data=Object.groupBy(lists.value,({status})=>status);
    notStartedTasks.value=data[0];
    inProgressTasks.value=data[1];
    doneTasks.value=data[2];
    archivedTasks.value=data[3];
}

onMounted(()=>{
    fetchTasks();
})
</script>
