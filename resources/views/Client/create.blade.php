<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create/Client') }}

        </h2>
    </x-slot>
<form method="POST" action="{{route('Client.index')}}">
    <div class="w3-container w3-blue">
        <h1>Create Client</h1>
    </div><br>
        
                <div class="w3-container">





                        @csrf
                    First Name:
                        <input class="w3-input" type="text" name="nom" class="form-control"/><br><br>
                        Last Name:
                        <input class="w3-input" type="text" name="prenom" class="form-control"/><br><br>
                        Phone Number:
                        <input class="w3-input" type="text" name="tel" class="form-control"/><br>


                </div>
                
            

                <br><input type="submit" value="Save" class="btn btn-primary">
                        

</form>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
</form>

</x-app-layout>