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
    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Titre</label>
                <input style="color:blue;" type="text" name="title" placeholder="Nom Plat" required>
            </div>
            <div>
                <label for="">Prix</label>
                <input style="color:blue;" type="num" name="price" placeholder="prix" required>
            </div>
            <div>
                <label for="">Image</label>
                <input type="file" name="image" required>
            </div>
            <div>
                <label for="">Description</label>
                <input style="color:blue;" type="text" name="description" placeholder="Description" required>
            </div>
            <div>
                <input  type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>

        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding :30px">Nom Plat</th>
                    <th style="padding :30px">Prix à l'unité</th>
                    <th style="padding :30px">Description</th>
                    <th style="padding :30px">Image</th>
                    <th style="padding :30px">Action</th>
                    <th style="padding :30px">Action2</th>
                </tr>

                @foreach($data as $data)

                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Supprimer</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Modifier</a></td>
                </tr>

                @endforeach
            </table>
        </div>

    </div>

    </div> 
    @include("admin.adminscript")
  </body>
</html>