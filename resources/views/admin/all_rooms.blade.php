<!DOCTYPE html>
<html>
  <head>
  @include('admin.css')
  <style>
    label{
      display: inline-block;
      width: 200px;
    }
  </style>
  </head>
  <body>
      @include('admin.header')
      @include('admin.sidebar')
 

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <div>
            <h1 style="font-weight: bold; font-size : 30px;"><strong>All Rooms</strong></h1>
            <br>
           

            <div class="card shadow-lg">
      <div class="card-body">
        <table class="table table-hover table-striped table-bordered align-middle">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Room Title</th>
              <th>Image</th>
              <th>Description</th>
              <th>Price</th>
              <th>WiFi</th>
              <th>Room Type</th>
              <th>Created At</th>
              <th>Updated At</th>
            </tr>
          </thead>
          <tbody>
            <!-- Example Row 1 -->

            @foreach($data as $room_data)

            <tr>
              <td>1</td>
              <td>{{ $room_data->room_title }}</td>
              <td><span class="text-muted"><img src="room/{{$room_data->image}}" alt="" style="width:200px; height:200px"></span></td>
              <td> {!! Str::limit($room_data->description,150) !!}</td>
              <td>₹{{ $room_data->price }}</td>
              <td><span style="color: white;" class="badge bg-success">{{ $room_data->wifi }}</span></td>
              <td><span class="text-muted">{{ ucfirst($room_data->room_type) }}</span></td>
              <td>{{ $room_data->created_at->format('d M Y, h:i A') }}</td>
                <td>{{ $room_data->updated_at->format('d M Y, h:i A') }}</td>

            </tr>
@endforeach


 
          </tbody>
        </table>
      </div>
    </div>

          </div>

          </div>
        </div>
      </div>

      @include('admin.footer')
  </body>
</html>