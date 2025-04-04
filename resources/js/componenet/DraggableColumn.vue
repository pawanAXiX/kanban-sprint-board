<template>
    <div v-for="column in columns" class="px-2 pt-1 flex flex-col">
        <div>
            <span class="text-uppercase">{{ column }}</span>
        </div>

        <div >
            <draggable
                :data-col-name="column"
                :list="tasks[column]"
                group="task"
                @end="pushUpdate"
                itemKey="name"
            >
                <div v-for="task in tasks[column]" :data-item-id="task.id" >
                    <h2>{{task.name}}</h2>
                </div>

            </draggable>
            <div>
            </div>
            <div class="px-5 py-5 border border-blue">
                <button slot="footer">Add</button>
            </div>
        </div>
    </div>
</template>

<script setup>

import {VueDraggableNext} from 'vue-draggable-next'
import {computed, onBeforeMount, onMounted, reactive, ref, toRaw, watch} from "vue";
import {apiCall} from "../global/api.js";

const draggable = VueDraggableNext;

const list=ref({})
const columns=ref([])
const tasks=ref({})

onBeforeMount(async ()=>{
    const {colNames,taskArray}=await apiCall.fetchTasks()
    columns.value=colNames;
    tasks.value=taskArray;




})




const pushUpdate = (event => {
    const oldColumn = event.from.dataset.colName;
    const newColumn = event.to.dataset.colName;
    const itemId = parseInt(event.item.dataset.itemId);
    const getTaskArray=toRaw(tasks.value[newColumn]);
    console.log(getTaskArray);
    const item =getTaskArray.find((item)=>item.id===itemId);
    const index=getTaskArray.indexOf(item);
    const response=apiCall.fetchReorder(itemId,newColumn,index)

})

watch(tasks,()=>{
    console.log("changed");

},{deep:true})
</script>
