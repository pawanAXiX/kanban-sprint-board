<template>
    <div v-for="obj in Object.keys(list)" class="px-2 pt-1 flex flex-col">
        <div>
            <span class="text-uppercase">{{ obj }}</span>
        </div>

        <div>
            <draggable
                :data-col-name="obj"
                :list="list[obj]"
                group="task"
                @end="pushUpdate"
                itemKey="name"
            >
                <template #item="{ element, index }">
                    <h2>{{ item.name }}</h2>
                </template>
            </draggable>
            <div class="px-5 py-5 border border-blue">
                <button slot="footer">Add</button>
            </div>
        </div>
    </div>
</template>

<script setup>

import {VueDraggableNext} from 'vue-draggable-next'
import {onMounted, ref, watch} from "vue";

const draggable = VueDraggableNext;
const props = defineProps(['data']);
const colNames= ref([]);
const list = ref(props.data);

const pushUpdate = (event => {
    const oldColumn = event.from.dataset.colName;
    const newColumn = event.to.dataset.colName;
    const itemId = parseInt(event.item.getAttribute('data-item-id'));

    console.log('Old Col:' + oldColumn)
    console.log('New Col:' + newColumn)
    console.log('Item ID:' + itemId)

    const repeaterOfNewColumn = document.querySelector(`[data-col-name="${newColumn}"]`)
    console.log(repeaterOfNewColumn)

})

watch(list,function (e){
    console.log(e)

})

onMounted(() => {
    colNames.value=Object.keys(props.data);
})
</script>
