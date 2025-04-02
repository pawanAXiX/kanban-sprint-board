<template>
    <div class="px-2 pt-1 flex flex-col">
        <div>
            <span>{{props.colName}}</span>
        </div>
        <div >
            <draggable v-model="myArray"  group="task">

            <div  v-for="item in myArray" :key="item.id" class="px-5 py-5 " >
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
import {onMounted, ref} from "vue";
const myArray=defineModel('myArray')
const list=ref([]);
const props=defineProps(['colName']);

const draggable=VueDraggableNext;
onMounted(()=>{

})

</script>
