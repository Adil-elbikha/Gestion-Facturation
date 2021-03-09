<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client') }}

        </h2>
    </x-slot>
    <head>

        <style>
            .button {
                background-color: #a0aec0;
                border: none;
                color: white;
                padding: 20px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 15px;
                margin: 4px 2px;
                cursor: pointer;
                
                
            }

            table {
                border-collapse: collapse;

                border: 1px solid #ddd;
                width: 100%;
                position: center;

            }

            th, td {
                height: 70px;
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
                vertical-align: bottom;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!--<div class="card-header">Clients</div>-->

                    <div class="card-body">
                        <div class="button">
                            <a href="{{route('Client.create')}}" class="btn btn-sm btn-primary"> New Client</a>
                        </div>
                        <!--<form method="post" action="#" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                   aria-label="Search" style='float: right;'>
                            <button class="btn btn-outline-success my-2 my-sm-0" style='float: right;'
                                    type="submit">Search
                            </button>
                        </form>-->
                        <form>
  <div>
    <label for="mySearch">Rechercher un produit par son code :</label>
    <input type="search" id="mySearch" name="q"
    placeholder="2 lettres puis 4 chiffres" required
    size="30" pattern="[A-z]{2}[0-9]{4}">
    <button>Rechercher</button>
    <span class="validity"></span>
  </div>
</form>


                        <table class="table table-responsive-sm">

                            <thead>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>telephone</th>

                            <th></th>
                            </thead>
                            <tbody>
                            @forelse ($clients as $Client)
                                <tr>
                                    <td>{{$Client->nom}}</td>
                                    <td>{{$Client->prenom}} </td>
                                    <td>{{$Client->tel}}</td>

                                    <!--<td class="px-4 py-3"> <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>-->
                                    <td class="px-4 py-3"><a href="{{ route('Client.edit', $Client->id) }}"
                                                            class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">edit</a>
                                    <td class="px-4 py-3">
                                        <form action="/client/{{$Client->id}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button
                                                type="submit"
                                                class="bg-red-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                                delete
                                            </button>
                                        </form>

                                </tr>
                            @empty

                                <tr>
                                    <td colspan="2">No records found. <a href="{{route('Client.create')}}">Click
                                            here</a> to create a client.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
