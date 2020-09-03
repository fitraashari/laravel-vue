<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo APP</title>
    <style>
        .completed{
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div id="app">
        <h3>Todo List</h3>
        <input type="text" v-model="newTodo" @keyUp.enter="addTodo">
        <ul>
            <li v-for="(todo, index) in todos">
            <span v-bind:class="{'completed':todo.done}">@{{todo.text}}</span>
            <button type="button" v-on:click="deleteTodo(index)">X</button>
            <button v-on:click="completeTodo(todo)" type="button">Done</button>
            </li>
        </ul>
    </div>
    <!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
new Vue({
    el:'#app',
    data:{
        newTodo:'',
        todos: [
            {id:1,text:'Lari lari',done:0},
            {id:2,text:'Main Bola',done:1},
        ]
    },
    methods: {
        addTodo: function(){
            let textInput = this.newTodo.trim();
            if(textInput){
                this.todos.unshift({text:textInput,done:0});
                this.newTodo='';
            }
            // console.log(textInput);
        },
        deleteTodo:function(index){
            console.log(index);
            this.todos.splice(index,1);
        },
        completeTodo(todo){
            // if(this.todos[index].done==0){
            // this.todos[index].done=1;
            // }
            // else{
            // this.todos[index].done=0;
            // }
            todo.done = !todo.done
        }
    },
})
</script>
</body>
</html>