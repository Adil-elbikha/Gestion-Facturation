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
                       

                        <div class="card-body justify-content-center">

                        Facteur Number:
                            <input type="text" name="Facture_number"  class="form-control" value="" class="form-control"/>
                           
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
						<td >
						<input type="text" id="ref" name='ref' placeholder='Reference' class="form-control" readonly/>
             
						</td>
						<td>
						<input type="number" id="qte" name='qte' placeholder='Quantité' min="0"  oninput="calculerMontant()" class="form-control"/>
						</td>
                        <td>
						<input type="text" id="prixUnit" name='pUni' placeholder='Prix Unitaire' class="form-control" readonly/>
						</td>
                        <td>
						<input type="text" id="Montanttotal"name='mnt' placeholder='Montant' class="form-control" readonly/>
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
               
			</table>
		
	    <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
    </div>
    
</body>
    <div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-4">
      <table class="table table-bordered table-hover" id="tab_logic_total">
        <tbody>
          <tr>
            <th class="text-center">Sub Total</th>
            <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly/></td>
          </tr>
          <tr>
            <th class="text-center">Tax</th>
            <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                <input type="number" class="form-control" id="tax" placeholder="0">
                <div class="input-group-addon">%</div>
              </div></td>
          </tr>
          <tr>
            <th class="text-center">Tax Amount</th>
            <td class="text-center"><input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly/></td>
          </tr>
          <tr>
            <th class="text-center">Grand Total</th>
            <td class="text-center"><input type="number" name='total_amount' id="total_amount" placeholder='0.00' class="form-control" readonly/></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    
                            
                            Facture Date:
                            <input type="date" name="Facture_date" value="{{ date('Y-m-d') }}" class="form-control"/>
                            Due Date:
                            
                            <select class="form-control" id="discount_type" name="discount_type" hidden>
                                <option value="Amount">Amount</option>
                                <option value="Percent">Percent</option>
                            </select>
                            
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
      $("#produits_id").change(function(){
          $.ajax({
            url: "/prod/" + $(this).val(),
            success: function(data){
                //var id = $id;
                console.log(data)
                $("#ref").val(data.reference);
                $("#prixUnit").val(data.total);
                
            }
          });
    });
     $("#add_row").click(function(){b=i-1;
    //$('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='nom"+i+"' type='text' placeholder='Nom' class='form-control input-md'  /> </td><td><input  name='ref"+i+"' type='text' placeholder='Reference'  class='form-control input-md' readonly></td><td><input  name='qte"+i+"' type='number' placeholder='Quantité'  class='form-control input-md'></td><td><input  name='mnt"+i+"' type='text' placeholder='Prix Unitaire'  class='form-control input-md' readonly></td><td><input  name='Montant"+i+"' type='text' placeholder='Montant'  class='form-control input-md' readonly></td>");
     $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
     
    
      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
       
      i++; 
      
  });
    

     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });


     $("#produits_id").on('change', function(){
    $.ajax({
            url: "/Facture/" + $("#produits_id").val(),
            success: function(data){
                //var id = $id;
                alert($id);
                
            }
          });
    });
     
    });
    function calculerMontant()
    {
        var qte = document.getElementById("qte").value;
        var prixunitaire = document.getElementById("prixUnit").value;
        if(qte>=0)
        {
            document.getElementById("Montanttotal").value=qte*prixunitaire;
       }
        //calc_total();
        //$(this).find('.Montanttotal').val(qte*prixunitaire);
    }

    //////////////////////////////////
    $(".product").on('change',function(){
	    option_checker(this)
	});
	
	
	$('#tab_logic tbody').on('keyup change',function(){
		//calc();
	});
	$('#tax').on('keyup change',function(){
		calc_total();
	});

function calc_total()
{
	Montanttotal=0;
	$(".Montanttotal").each(function() {
        Montanttotal += parseInt($(this).val());
    });
	$('#sub_total').val(Montanttotal.toFixed(2));
	tax_sum=Montanttotal/100*$('#tax').val();
	$('#tax_amount').val(tax_sum.toFixed(2));
	$('#total_amount').val((tax_sum+Montanttotal).toFixed(2));
}
	
    
    </script>
</x-app-layout>
