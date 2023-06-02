

<form>
    <htmL>
        <body style="background-color: rgb(166, 196, 202);display:flex;justify-content: center;align-items:center">
            <h1 style="color:rgb(0, 0, 0);margin-left:210px">APPOINTMENT</h1></div><br>

    <table border="3px"  >
        <thead>
        <tr>
      <td>
        ID </td>
        <td>
        Name </td>
        <td>
        Father Name </td>
        <td>
        Gender </td>
        <td>
        Date of birth </td>
        <td>
            Age</td>
            <td>
            Booking date </td>
            <td>File</td>

            <td>Edit</td>
            <td>delete</td>
            <td>Download</td>

        </tr>
        </thead>
        <tbody>
            @foreach($cruds as $crud)
            <tr border="none">
                <td>{{$crud->id}}</td>
                <td>{{$crud->name}}</td>
                <td>{{$crud->fathername}}</td>
                <td>{{$crud->gender}}</td>
                <td>{{$crud->date_of_birth}}</td>
                <td>{{$crud->age}}</td>
                <td>{{$crud->booking_date}}</td>
                <td>{{$crud->file_path}}</td>



                <td><a href="{{url('users-edit')}}/{{$crud->id}}" class="btn btn-warning">edit</a>
                    <td><a href="{{url('users-delete')}}/{{$crud->id}}" class="btn btn-warning">Delete</a>
                </td>
                <td><a><a href="{{url('users-pdf')}}/{{$crud->id}}" class="btn btn-warning">Download</a></td>

                        @csrf
    </form>
      </td>
      <td >

      @endforeach
      </tbody>
      </table>

    </body>
      </html>


