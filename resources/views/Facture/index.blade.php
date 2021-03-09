<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create/Facture') }}

        </h2>
    </x-slot>
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
                right: 10px;
                
                position: relative;
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    

                    <div class="card-body">
                    <div class="button">
                        <a href="{{route('Facture.create')}}" class="btn btn-sm btn-primary">Create New Factures</a>
                        </div>
                        <form method="post" action="#" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                   aria-label="Search" style='float: right;'>
                            <button class="btn btn-outline-success my-2 my-sm-0"
                                    type="submit" style='float: right;'>Search</button>
                        </form>

                        <table class="table table-responsive-sm">
                            <thead>
                                <th>Facteur Number</th>
                                <th>Client Name</th>
                                <th>Total</th>
                                <th>Balance</th>
                                
                                
                                <th></th>
                            </thead>
                            <tbody>
                            @forelse($factures as $Facteur)

                                <tr>
                                    <td>{{$Facteur->facteur_number}}</td>
                                    <td>{{$Facteur->client->first_name}} {{$Facteur->client->last_name}}</td>
                                    <td>${{number_format($Facteur->Total, 2)}}</td>
                                    <td>${{number_format($Facteur->balance, 2)}}</td>
                                    <td>  <?php if ($invoice->due_date ==! null) echo date("F d, Y", strtotime($invoice->due_date));?></td>
                                    
                                    <td lass="px-4 py-3"> <a href="{{ route('facteur.edit', $facteur->id) }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">edit</a>
                                     <td class="px-4 py-3">
                                        <form action="/facteur/{{$Facteur->id}}" method="post">
                                            @method('DELETE')

                                            @csrf
                                    <button
                                        type="submit"
                                        class="bg-red-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                        delete
                                    </button>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="2">No records found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</x-app-layout>
