<template>
    <div :class="['px-2 pt-1 flex flex-col gap-5',getAppliedTheme.border]">
        <div  :class=" ['px-5 flex flex-row justify-between rounded-lg',getAppliedTheme.theme[column].header,getAppliedTheme.theme[column].bg]">
            <span class="uppercase">{{ column }}</span>
            <span>{{taskCount}}</span>
        </div>

        <div >
            <draggable
                class="flex flex-col gap-4 min-h-100 max-h-100 overflow-scroll "
                :data-col-name="column"
                :list="tasks"
                group="task"
                @end="pushUpdate"
            >
                <div :class="['h-25 pl-5 min-h-full rounded-xl overflow-hidden',getAppliedTheme.border]" v-for="task in tasks" :data-item-id="task.id"  :key="task.id" >
                    <div>
                        <div class="w-full flex justify-between px-2 py-2 " @click="openTaskModel(task)" :key="task.id">
                            <h2 class="font-bold w-50">{{task.name}}</h2>
                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-wrap px-2">{{task.description?.slice(0,10)}}</span>
                        </div>
                    </div>

                </div>
            </draggable>
                <div :class="['mt-5 text-center py-5 ',getAppliedTheme.addButton]" @click="openTaskModel()">
                    <button >Add +</button>
                </div>
        </div>
    </div>
    <div v-if="openModel" class="absolute z-100 h-screen w-screen z-100 top-0 left-0 backdrop-blur-xl"   >
        <div class="fixed top-0 right-0 px-5 py-5" @click="openModel=false" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </div>
        <TaskForm :task="data" :status="column"/>
    </div>
</template>

<script setup>

import {VueDraggableNext} from 'vue-draggable-next'

import {apiCall} from "../global/api.js";
import {computed, reactive, ref} from "vue";
import {useThemeStore} from "../global/themeStore.js";
import {storeToRefs} from "pinia";
import TaskForm from "./TaskForm.vue";
const themeStore=useThemeStore();
const draggable = VueDraggableNext;


const props=defineProps(['list','column'])
const data=ref({});
const openModel=ref(false)
const taskCount=computed(()=>{
    return tasks.value.length;
})
const tasks=ref([...props.list])

const {getAppliedTheme}=storeToRefs(themeStore);
const pushUpdate = async (event) => {
    const newColumn = event.to.dataset.colName;
    const itemId = parseInt(event.item.dataset.itemId);
    const index=event.newIndex;
    const response= await apiCall.fetchReorder(itemId,newColumn,index);
}

function pushAddTask(task){

}
function reflectEditTask(task){

}
function openTaskModel(task=null){
    openModel.value=true;
   data.value=task??'';
}
function closeModel(){
    openModel.vlaue=false;
}
</script>

