<!doctype html>
<html>
<head>
<title v-bind:title="title"></title>
</head>
<body>
<div id="root">
<button v-bind:title="title">click me</button>
<input type="text" id="input" v-model="newName">
<button id="button" @click="addName"> add name </button>
<li v-for="name in names" v-text="name">
</div>
<script src="https://unpkg.com/vue"></script>
<script>
  var app = new Vue({
      el: '#root',
      data:{
          title: 'JS set Title',
          newName: "",
          names: ['Joe', 'Mary', 'Jane', 'Jack']
      },
      methods: {
          addName: function() {
             this.names.push(this.newName);
             this.newName = " ";
          }
      }
  });
</script>

</body>
</html>