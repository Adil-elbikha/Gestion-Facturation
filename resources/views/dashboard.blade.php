<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>




    <!DOCTYPE html>
    <html>
    <head>
        <title>Page Title</title>
        <style>



            .clearBoth { clear:both; }
            span.space  { margin: 10%; border: black 1px solid; padding: 40px}



        </style>
    </head>
    <body><br><br><br><br><br><br><br><br>
    <div  >
  <span class="inline space" style="text-align: center" >
    <a href="{{route('Client.create')}}">Add Client </a>

  </span>



        <span class="inline space" style="text-inline: center">
    <a href="#">Add Produit</a>
  </span>
        <span class="inline space" style="text-inline: center">
    <a href="#">Add Facteur</a>
  </span>
    </div>



    </body>
    </html>



    


</x-app-layout>
