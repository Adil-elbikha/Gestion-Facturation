<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('edit/Client') }}

    </h2>
</x-slot>
    
        <div class="w3-container w3-blue">
            <h4>Edit Client</h4>
        </div><br>
        <div class="w3-container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form method="post" action="{{ route('Client.update', $clients->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="prod_name">Client Name</label>
                    <input class="w3-input" type="text" class="form-control" name="nom"
                           value={{ $clients->nom }} >
                </div><br>
                <div class="form-group">
                    <label for="prod_desc">Client prenom</label>
                    <input class="w3-input" type="text" class="form-control" name="prenom"
                           value={{ $clients->prenom }} >
                </div><br>
                <div class="form-group">
                    <label for="prod_price">Client telephone</label>
                    <input class="w3-input" type="text" class="tele" name="tel"
                           value={{ $clients->tel }} >
                </div><br>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>


    

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

</x-app-layout>
