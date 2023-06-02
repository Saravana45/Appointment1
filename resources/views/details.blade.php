<form>
    <htmL>
        <head>
            <style>
                .green{
                    position: relative;
                    left:150px;
                    bottom: 200px;
                }
                h1{
                    position: relative;
                    right:100px;
                }
                </style>
        </head>
        <body style="background-color: rgb(126, 198, 222);display:flex;justify-content: center;align-items:center">
 <div class="green">
               <h1 style="color:rgb(0, 0, 0);margin-bottom:250px margin-right:250px">APPOINTMENT</h1></div><br>
 </div>
    <table border="3px"  >
        <thead>
        <tr>
      <html>
        <head>
            <title> Appointment Deatils</title>
        </head>
        <body>
            @if($crud)
            <table border="2px">
                <tr>
        <th>
            ID</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Gender</th>
        <th>Date of birth</th>
            <th>Age</th>
            <th>Booking date</th>
            <th>File</th>

        </tr>
        <tr>
            <td>{{$crud->id}}</td>
            <td>{{$crud->name}}</td>
            <td>{{$crud->fathername}}</td>
            <td>{{$crud->gender}}</td>
            <td>{{$crud->date_of_birth}}</td>
            <td>{{$crud->age}}</td>
            <td>{{$crud->booking_date}}</td>
            <td>{{$crud->file_path}}</td>

        </tr>

    </table>
    @else
    <p><h4 style="color:rgb(20, 19, 19);margin-right:150px">NO DETAILS FOUND FOR THE PROVIDED ID</h4></p>
    @endif



