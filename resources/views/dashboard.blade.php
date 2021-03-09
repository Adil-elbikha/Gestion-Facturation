<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>




    <html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
 



<div class="row">
  <div class="column" >
  <div class="container">
    <div class="card" style="width:350px">
    <img class="card-img-top" src="images/img_avatar3.png" alt="Card image" style="width:100%">
    <div class="card-body">
      
      <p class="card-text">Ajouter les Clients</p>
      <a href="{{route('Client.create')}}" class="btn btn-primary">Add Client</a>
    </div>
  </div>
  </div>
  </div>
  <div class="column" >
  <div class="container">
    <div class="card" style="width:350px">
    <img class="card-img-top" src="images/add-product-4-837051.png" alt="Card image" style="width:100%">
    <div class="card-body">
      
      <p class="card-text">Ajouter les Produits</p>
      <a href="{{route('Produit.create')}}" class="btn btn-primary">Add Product</a>
    </div>
  </div>
  </div>
  </div>
  <div class="column" >
  <div class="container">
    <div class="card" style="width:350px">
    <img class="card-img-top" src="images/cc.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      
      <p class="card-text">Ajouter les Factures</p>
      <a href="{{route('Facture.create')}}" class="btn btn-primary">Add Facture</a>
    </div>
  </div>
  </div>
  </div>
</div>
</body>
</html>



</x-app-layout>
