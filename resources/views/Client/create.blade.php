<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create/Client') }}

        </h2>
    </x-slot>
<form method="POST" action="{{route('Client.index')}}">
    <div class="container">
        <h1>Create Client</h1>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-6">
                <div class="card">





                        @csrf
                    First Name:
                        <input type="text" name="nom" class="form-control"/><br><br>
                        Last Name:
                        <input type="text" name="prenom" class="form-control"/><br><br>
                        Phone Number:
                        <input type="text" name="tel" class="form-control"/><br>


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
