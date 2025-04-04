<template>
    <div v-for="colName in Object.keys(data)" class="px-2 pt-1 flex flex-col">
        <div>
            <span class="text-uppercase">{{ colName }}</span>
        </div>

        <div>
            <draggable
                :data-col-name="colName"
                :list="tasks[obj]"
                group="task"
                @end="pushUpdate"
                itemKey="name"
            >

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
const tasks = ref(props.data);

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



onMounted(() => {
    console.log(tasks.value)
})
</script>
