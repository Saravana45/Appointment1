<htmL>
    <body style="background-color: rgb(175, 198, 203);display:flex;justify-content: center;align-items:center">

        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-left:100px">
     <div class="card-header"><h1 style="color:rgb(0, 0, 0);margin-left:70px">APPOINTMENT</h1></div><br>
                @if ($errors->any())
                <ul>
                    {!!implode('',$errors->all('<li>:message</li>'))!!}
                </ul>
                @endif

                <div class="card-body">
                 <form method="post" action="{{ url('users-store') }}" enctype="multipart/form-data" style="margin-left:100px">
                        @csrf

                     <div class="form-group row">
                         <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                         <div class="col-md-6">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fathername" class="col-md-4 col-form-label text-md-right">Father Name</label>

                            <div class="col-md-6">
                                <input id="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{ old('fathername') }}" required autocomplete="fathername">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth">

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="booking_date" class="col-md-4 col-form-label text-md-right">Booking Date:</label>

                            <div class="col-md-6">
                                <input id="booking_date" type="date" class="form-control @error('booking_date') is-invalid @enderror" name="booking_date" value="{{ old('booking_date') }}" required autocomplete="booking_date">

                                @error('booking_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>


           @if (isset($previousFile))
         <div class="form-group">
         <label>Previous File:</label>
         <p>{{ $previousFile->getClientOriginalName() }}</p>
           </div>
@endif


                        <div class="form-group">
                            <label for="file">File upload:</label>
                            <input type="file" name="file" id="file" class="form-control" required  value="{{old('name')}}">
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>


                     </div>
                        @if($errors->has('booking_exists'))
    <div class="alert alert-danger">
        {{ $errors->first('booking_exists') }}
    </div>
@endif
@if(Session::has('messag'))
{{Session::get('messag')}}
@endif
@if(Session::has('messa'))
{{Session::get('messa')}}
@endif

                    </form>
                </div>
            </div>
        </div>
        @if(Session::has('message'))
        {{Session::get('message')}}
        @endif

    </body>
    </html>

























