<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Facture') }}

        </h2>
    </x-slot>

    <form method="POST" action="{{route('Facture.store')}}">
        <div class="container">
            <h1>Create Facture</h1>
            <div class="row" style="padding-top: 10px">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Invoice Information</div>

                        <div class="card-body justify-content-center">
                            @csrf
                            Clients:
                            <select class="form-control" id="clients_id" name="clients_id" <?php if (app('request')->input('clients_id')) echo ' hidden'; ?>>
                                @forelse($clients as $client)
                                    <option value="{{$client->id}}" }}> {{$client->nom}}</option>

                                @empty
                                    <p>No clients</p>
                                @endforelse
                            </select>
                            <br>
                            

                            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row clearfix">
		<div class="col-md-12 column">
        Produits:
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Id
						</th>
						<th class="text-center">
							Nom  
						</th>
						<th class="text-center">
							Reference 
						</th>
                        <th class="text-center">
							Quantité
						</th>
						<th class="text-center">
							Prix Unitaire 
						</th>
                        <th class="text-center">
							Montant
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
                        <select class="form-control" id="produits_id" name="produits_id" <?php if (app('request')->input('clients_id')) echo ' hidden'; ?>>
                                @forelse($produits as $produit)
                                    <option value="{{$produit->id}}" }}> {{$produit->nom}}</option>

                                @empty
                                    <p>No produits</p>
                                @endforelse
                            </select>
						<!--<input type="text" name='nom'  placeholder='Nom' class="form-control"/>-->
						</td>
						<td>
						<input type="text" name='ref' placeholder='Reference' class="form-control"/>
						</td>
						<td>
						<input type="number" name='qte' placeholder='Quantité' class="form-control"/>
						</td>
                        <td>
						<input type="text" name='pUni' placeholder='Prix Unitaire' class="form-control"/>
						</td>
                        <td>
						<input type="text" name='mnt' placeholder='Montant' class="form-control"/>
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table>
		</div>
	</div>
	<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
</div>
                            
                            Facteur Number:
                            <input type="text" name="Facture_number" value="" class="form-control"/>
                            Facture Date:
                            <input type="date" name="Facture_date" value="{{ date('Y-m-d') }}" class="form-control"/>
                            Due Date:
                            <input type="date" name="due_date" class="form-control"/>
                            <input type="text" name="discount" class="form-control" hidden/>
                            <select class="form-control" id="discount_type" name="discount_type" hidden>
                                <option value="Amount">Amount</option>
                                <option value="Percent">Percent</option>
                            </select>
                            Private Notes:
                            <textarea name="private_notes" class="form-control"></textarea>
                            <br>
                            <br>
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
             $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='nom"+i+"' type='text' placeholder='Nom' class='form-control input-md'  /> </td><td><input  name='ref"+i+"' type='text' placeholder='Reference'  class='form-control input-md'></td><td><input  name='qte"+i+"' type='number' placeholder='Quantité'  class='form-control input-md'></td><td><input  name='mnt"+i+"' type='text' placeholder='Prix Unitaire'  class='form-control input-md'></td><td><input  name='Montant"+i+"' type='text' placeholder='Montant'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
    </script>
</x-app-layout>
