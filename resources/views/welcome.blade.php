<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Vue Js Demo</title>
  </head>
  <body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary" v-on:click="editing=true">Edit</button>
                    <button class="btn btn-info" v-on:click="editing=false">Cancel</button>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <h5>Items</h5>
            <ul class="list-group">
                <li class="list-group-item" v-for="item in items">@{{ item }} 
                <div class="text-right">
                <button class="btn btn-primary" v-if="editing" v-on:click="addToCart(item)">Add</button>
                </div>
                </li>
            </ul>
            <h5>Cart</h5>
            <ul class="list-group">
                <li class="list-group-item" v-for="cart_item in cart">@{{ cart_item }} 
                <div class="text-right">
                <button class="btn-warning" v-if="editing" v-on:click="removeFromCart(cart_item)">Remove</button>
                </div>
                </li>
            </ul>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <!-- Vue JS Sscript -->
    <script>
        var vm = new Vue({
            el: "#app",
            data: {
                items: ["Shoes","Bags", "Hotdog", "Watch", "Pants"],
                cart:[],
                editing: false
            },
            methods: {
                addToCart(item){
                    this.cart.push(item);
                    var index = this.items.indexOf(item);
                    this.items.splice(index, 1);
                },
                removeFromCart(item){
                    var index = this.cart.indexOf(item);
                    this.cart.splice(index, 1);
                    this.items.push(item);
                 
                }
            }
        })

    </script>
  </body>
</html>