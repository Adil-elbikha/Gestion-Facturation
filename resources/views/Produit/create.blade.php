<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create/Produit') }}

        </h2>
    </x-slot>
<form method="POST" action="{{route('Produit.index')}}">
    <div class="container">
        <h1>Create Client</h1>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-6">
                <div class="card">





                        @csrf
                     Name:
                        <input type="text" name="nom" class="form-control"/><br><br>
                        Reference:
                        <input type="text" name="reference" class="form-control"/><br><br>
                        total:
                        <input type="text" name="total" class="form-control"/><br>


                    </div>
                </div>
            </div>

                            <br><input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

</form>

</x-app-layout>
