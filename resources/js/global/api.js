import axios from "axios";

export const apiCall={
    async fetchTasks(){
        const response=await axios.get('http://localhost:8000/api/tasks')
        const items=await response.data;

        const colNames=Object.keys(items);

        return {
            colNames,items
        };
    },
    async fetchReorder(id,column,index){
        const requestBody={
            'newStatus':column,
            'index':index
        }
        const response =await axios.post(`http://localhost:8000/api/tasks/${id}/reorder`,requestBody);
        const items=await response.data;
        const colNames=Object.keys(items);

        return {
            colNames,items
        };

    },
    async createTask(name,description,priority,status){
        const requestBody={
            name,
            description,
            priority,
            status
        }
        const response =await axios.post(`http://localhost:8000/api/tasks/`,requestBody);
        const item=response.data;
        console.log(item);
    },
    async updateTask(id,name,description,priority){
        const requestBody={
            id,
            name,
            description,
            priority
        }
        const response =await axios.put(`http://localhost:8000/api/tasks/${id}/`,requestBody);
        const item=response.data;
        console.log(item);
    }
}

