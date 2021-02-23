<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('edit/Client') }}

    </h2>
</x-slot>
    <div class="card uper">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <div class="card-body">
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
                    <input type="text" class="form-control" name="nom"
                           value={{ $clients->nom }} >
                </div>
                <div class="form-group">
                    <label for="prod_desc">Client prenom</label>
                    <input type="text" class="form-control" name="prenom"
                           value={{ $clients->prenom }} >
                </div>
                <div class="form-group">
                    <label for="prod_price">Client telephone</label>
                    <input type="text" class="tele" name="tel"
                           value={{ $clients->tel }} >
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
