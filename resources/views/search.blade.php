<html>
    <head>
        <style>
            .green{
                position: relative;
                margin-right: 300px;
            }

            .red{
                position: relative;
                left: 240px;
            }
            </style>
    </head>
    <div>
    <body style="background-color: rgb(175, 198, 203); display:flex;justify-content: center;align-items:center">
    </div>
    <div class="red">
        <h1 style="color:rgb(0, 0, 0);margin-bottom:300px" >APPOINTMENT</h1><br>
    </div>
<form action="{{ url('store') }}" method="GET">
    <div class="green">
    <input type="text" name="id" placeholder="Enter ID" required>
    <button type="submit">Search</button>
    </div>
</form>
</body>
</html>
