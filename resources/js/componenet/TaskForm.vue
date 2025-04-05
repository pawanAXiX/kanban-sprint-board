<template>
    <div class="w-full h-full flex justify-center items-center " @click="$event.stopPropagation()
">
        <div class="border h-1/2 w-1/3 px-5 py-5  border-gray-400">
            <form class="space-y-6" @submit.prevent="onFormSubmit">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input
                        v-model="formData.name"
                        type="text"
                        id="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter your name"
                    >
                </div>

                <!-- Description Field -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea
                        v-model="formData.description"
                        id="description"
                        rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Please provide a brief description"
                    ></textarea>
                </div>

                <!-- Select Field -->
                <div>
                    <label for="option" class="block text-sm font-medium text-gray-700 mb-1">Select an option</label>
                    <div class="relative">
                        <select
                            v-model="formData.priority"
                            id="option"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none"
                        >
                            <option value="" disabled selected>Choose an option</option>
                            <option value="high">HIGH</option>
                            <option value="medium">MEDIUM</option>
                            <option value="low">LOW</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full px-4 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>


import {onMounted, reactive} from "vue";
import {apiCall} from "../global/api.js";

const props=defineProps(['task','status'])
// const url=props.task.id?'api/tasks/'+props.task.id:'api/tasks/';
const formData=reactive({
    id:props.task.id,
    name:props.task.name??'',
    description:props.task.description??'',
    priority:props.task.priority??'',
})

async function onFormSubmit(){
    console.log(props.status);
    const id=formData.id;
    const name=formData.name;
    const description=formData.description;
    const priority=formData.priority;
    if(id){
        const response =await apiCall.updateTask(id,name,description,priority);
    }else{
        const response =await apiCall.createTask(name,description,priority,props.status)
    }


}
</script>
