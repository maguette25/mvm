<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <div class="container">

    <form action="{{url('/search')}}" method="get">
        @csrf
        <input type="text" name="search" style="color:blue;">
        <input type="submit" value="Search" class="btn btn-success">
    </form>

        <table>
            <tr align="center">
                <td style="Padding: 50px;">Nom Utilisateur</td>
                <td style="Padding: 50px;">Numéro de Téléphone</td>
                <td style="Padding: 50px;">Adresse de livraison</td>
                <td style="Padding: 50px;">Nom Plat</td>
                <td style="Padding: 50px;">Prix à l'unité</td>
                <td style="Padding: 50px;">Quantités Commandés</td>
                <td style="Padding: 50px;">Total Prix</td>
            </tr>

            @foreach($data as $data)

            <tr align="center" style="background-color: black;">
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->foodname}}</td>
                <td>{{$data->price}} FCFA</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->price * $data->quantity}} FCFA</td>
            </tr>

            @endforeach


        </table>

    </div>

    </div>
    @include("admin.adminscript")
  </body>
</html>