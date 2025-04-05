<template>
    <div class="px-2 pt-1 flex flex-col gap-5">
        <div>
            <span class="uppercase">{{ column }}</span>
        </div>

        <div class="border border-gray-300 bg-gray-500 px-5 py-5 rounded-lg" >
            <div >
                <draggable
                    class="flex flex-col gap-4 "
                    :data-col-name="column"
                    
                    :list="tasks"
                    group="task"
                    @end="pushUpdate"
                >
                    <div class="py-5 border border-gray-300 rounded-xl h-25" v-for="task in tasks" :data-item-id="task.id" :key="task.id"  >
                        <h2 class="px-5 font-bold">{{task.name}}</h2>
                        <h2 class="px-5  text-wrap">{{task.description?.slice(0,10)}}</h2>

                    </div>
                </draggable>
            </div>
            <div class="mt-5 text-center py-5 bg-gray-400 border border-gray-300 rounded-xl hover:bg-gray-600">
                <button >Add +</button>
            </div>
        </div>
    </div>
</template>

<script setup>

import {VueDraggableNext} from 'vue-draggable-next'

import {apiCall} from "../global/api.js";
import {ref} from "vue";

const draggable = VueDraggableNext;
const props=defineProps(['list','column'])

const tasks=ref([...props.list])

const pushUpdate = async (event) => {
    const newColumn = event.to.dataset.colName;
    const itemId = parseInt(event.item.dataset.itemId);
    const index=event.newIndex;
    const response= await apiCall.fetchReorder(itemId,newColumn,index);
    console.log(tasks.value)
}





</script>
