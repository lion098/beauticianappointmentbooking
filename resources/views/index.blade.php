<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Beautician Appointment Booking</title>
</head>
<body>
    <div class="container">

        {{-- modal for adding beauticians --}}
        <button type="button" class="mt-2 btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Beauticians</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Beautician</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="{{route('index.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="text-dark" for="name">Beautician Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>

        {{-- Modal for beauticians' working hour --}}
        <button type="button" class="mt-2 btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Add Beautician's Working Hours</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Add Beautician's Working Hour</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="{{route('workinghour.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label class="text-dark" for="name">Beautician Name:</label>
                          <select class="form-control" name="beautician_id">
                            @foreach ($beautician as $item)   
                              <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-12">
                          <label for="" class="text-dark">Day:</label>
                          <select class="form-control" name="day">
                            <option value="sunday">Sunday</option>
                            <option value="moday">Moday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thurday">Thurday</option>
                            <option value="friday">Friday</option>
                          </select>
                        </div>
                        <div class="form-group col-md-12">
                          <label for="" class="text-dark">Open Time:</label>
                          <input type="time" class="form-control" name="open_time">
                        </div>
                        <div class="form-group col-md-12">
                          <label for="" class="text-dark">Close Time:</label>
                          <input type="time" class="form-control" name="close_time">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        
        <br><br>

        <h1 class="text-primary">List of Beauticians:</h1>

        <ul class="list-group">
          @foreach ($beautician as $item)     
            <li class="list-group-item">{{$item->name}}</li>
          @endforeach
        </ul>
    </div>
</body>
</html>