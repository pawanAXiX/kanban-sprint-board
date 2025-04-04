<template>
    <div class="px-2 pt-1 flex flex-col" v-for="obj in data" >
        <div>
            <span>{{obj.status}}</span>
        </div>
        <div >
            <draggable :list="obj.tasks"   group="task" @end="pushUpdate" :data-colName="obj.status">

            <div  v-for="item in obj.tasks"  :key="item.id" :data-item-id="item.id"   class="px-5 py-5"  >
                   <h2>{{item.name}}</h2>

            </div>

            </draggable>
            <div class="px-5 py-5 border border-blue">
                <button slot="footer"  >Add</button>
            </div>
        </div>
    </div>
</template>

<script setup>

import { VueDraggableNext } from 'vue-draggable-next'
const draggable=VueDraggableNext;
import {onMounted, ref, watch} from "vue";
import colData from "../global/colData.js";
// const myArray=defineModel('myArray')
// const list=ref([]);
const props=defineProps(['data']);

//const checkStatus=['not started','in progress','active','archived'];

const pushUpdate=(event=>{

    const oldColumn=event.from.getAttribute('data-colName')
    const newColumn=event.to.getAttribute('data-colName')
    const itemId=parseInt(event.item.getAttribute('data-item-id'));
    console.log(oldColumn)
    console.log(newColumn)
    console.log(itemId);
    const newIndex=data[newColumn].indexOf((item)=>item.id===itemId)
    console.log(newIndex);
    const data={

    }

    // console.log(colName)
    // const taskId=item.getAttribute("data-item");
    // const oldColumn=item.getAttribute("data-old-colName")
    // const taskMap={
    //     id:taskId,
    //     oldColumn:oldColumn,
    //     newColumn:colName,
    //     i
    // }
    // console.log(taskMap)
})

onMounted(()=>{
    console.log(props.data.value)
})



</script>
