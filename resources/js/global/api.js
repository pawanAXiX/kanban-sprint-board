import axios from "axios";

export const apiCall={
    async fetchTasks(){
        const response=await axios.get('http://localhost:8000/api/tasks')
        const items=await response.data;
        const taskArray={}

        let i=0;
        items.forEach((item)=>{
            taskArray[item.status]=item.tasks;
        })
        const colNames=Object.keys(taskArray);



        return {
            colNames,taskArray
        };
    },
    async fetchReorder(id,column,index){
        const requestBody={
            'newStatus':column,
            'index':index
        }
        const response =await axios.post(`http://localhost:8000/api/tasks/${id}/reorder`,requestBody);
        console.log(response.data)
    }

}

