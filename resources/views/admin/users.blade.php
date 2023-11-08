
<body>
    <x-app-layout>
    
    </x-app-layout>
      <head>
      @include("admin.admincss")
      </head>
        <body>

            <div class="container-scroller">
            @include("admin.navbar")
                <div style="position:relative; top : 60px; right: -120px;">
                    <table bgcolor="grey" border="3px">
                        <tr>
                            <th style="padding: 50px">Nom</th>
                            <th style="padding: 50px">Email</th>
                            <th style="padding: 50px">Action</th>
                        </tr>
                        @foreach($data as $data)
                        <tr align="center">
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            @if($data->usertype=="0")
                            <td><a href="{{url('/deleteuser',$data->id)}}">Supprimer</a></td>
                            @else
                            <td><a >Non Autorisé</a></td>
                            @endif
                        </tr>
                        @endforeach

                    </table>
                </div>

            </div>
            @include("admin.adminscript")
        </body>
    </html>
</body>
