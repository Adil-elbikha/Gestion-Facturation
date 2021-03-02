<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create/Produit') }}

        </h2>
    </x-slot>
<form method="POST" action="{{route('Produit.index')}}">
<div class="w3-container w3-blue" >
        <h1>Create Product</h1>
</div><br>
        
            
                <div class="w3-container">





                        @csrf
                        Name:
                        <input class="w3-input" type="text" name="nom" class="form-control"/><br><br>
                        Reference:
                        <input class="w3-input" type="text" name="reference" class="form-control"/><br><br>
                        total:
                        <input  class="w3-input" type="text" name="total" class="form-control"/><br>


                    
                </div>
            

                            <br><input type="submit" value="Save" class="btn btn-primary">
                        
      

</form>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

</x-app-layout>
