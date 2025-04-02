<template>
    <draggable>
        <div v-for="item in list" :key="item.id" >
            <h2>hello</h2>
        </div>
        <button slot="footer" >Add</button>
    </draggable>
</template>

<script setup>


import {onMounted, ref} from "vue";

const props=defineProps(['myArray'])
const list=ref([]);

onMounted(()=>{
    list.value=props.myArray;
    console.log(list.value);
})
</script>
