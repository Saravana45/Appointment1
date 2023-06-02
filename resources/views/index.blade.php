<html>
    <body style="background-color: rgb(157, 199, 190);display:flex;justify-content: center;align-items:center">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 style="color:rgb(0, 0, 0);margin-left:1px">APPOINTMENT</h1></div><br>
                @if ($errors->any())
                <ul>
                    {!!implode('',$errors->all('<li>:message</li>'))!!}
                </ul>
                @endif

                <div class="card-body">
                    <form method="post" action="{{ url('users-update',$crud->id) }}" enctype="multipart/form-data">
                        @csrf


                      <input type="hidden" name="id" value="{{$crud->id}}">

              <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

              <div class="col-md-6">
         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$crud->name}}" required autocomplete="name" autofocus>






                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fathername" class="col-md-4 col-form-label text-md-right">Father Name</label>

                            <div class="col-md-6">
                                <input id="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{$crud->fathername}}" required autocomplete="fathername">






                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                @if($crud->gender=="male")
                                <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>

                                    <option value="male"{{ $crud->gender }}>Male</option>
                                    <option value="female" {{ $crud->gender}}>Female</option>
                                </select>
                                @else
                                <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>

                                    <option value="female"{{ $crud->gender }}>Female</option>
                                    <option value="male" {{ $crud->gender}}>Male</option>
                                </select>

                                @endif

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
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{$crud->date_of_birth}}" required autocomplete="date_of_birth">

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
                                <input id="booking_date" type="date" class="form-control @error('booking_date') is-invalid @enderror" name="booking_date" value="{{$crud->booking_date}}" required autocomplete="booking_date">

                                @error('booking_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <label for="file">File Upload: </label>
                        <input type="file"  id="file" name="file" value="{{$crud->file_path}}" required autocomplete="file">
                    @if ($crud->file_path)
                        <div class="form-group">
                        <label>{{ $crud->file_path }}</label>
                       </div>
                      @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                        @if($errors->has('booking_exists'))
    <div class="alert alert-danger">
        {{ $errors->first('booking_exists') }}
    </div>
@endif


                    </form>
                </div>
            </div>
        </div>









                            @csrf

                          </form>
          </td>
          <td >


          </tbody>
          </table>





        </body>
        </html>

