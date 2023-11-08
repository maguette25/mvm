<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include("admin.admincss")
  </head>
  <body>


    <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Titre</label>
                <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <div>
                <label for="">Prix</label>
                <input style="color:blue;" type="num" name="price" value="{{$data->price}}" required>
            </div>
            <div>
                <label for="">Description</label>
                <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
            </div>
            <div>
                <label for="">Ancien Image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">
            </div>
            <div>
                <label for="">Nouveau Image</label>
                <input type="file" name="image" required>
            </div>
            <div>
                <input  type="submit" value="Enregistrer" >
            </div>
        </form>

        <div>




    </div>
    @include("admin.adminscript")
  </body>
</html>