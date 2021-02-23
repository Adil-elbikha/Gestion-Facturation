<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create/Client') }}

        </h2>
    </x-slot>

    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['Client.destroy', $clients->id]
        ]) !!}
        {!! Form::submit('Delete this client?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
    @stop
</x-app-layout>
