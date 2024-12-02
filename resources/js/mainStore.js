import { defineStore } from 'pinia';

export const store = defineStore('counter', {
    state:() => {
        return {
            count : 0,
            name : ''
        }
    },

    getters:{
        doubleCount: (state) => state.count * 2,
    },

    actions:{
        increment(){
            this.count++;
        }
    }
})