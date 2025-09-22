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
            <h1 style="font-weight: bold; font-size : 30px;"><strong>Add Rooms</strong></h1>
            <br>
            <form action="{{url('add_room')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div>
                  <label for="">Room Title</label>
                  <input type="text" name="title" class="form-control" required>
              </div>

              <div>
                <label for="">Description</label>
               <textarea name="description" id="" class="form-control" required></textarea>
              </div>

              <div>
                <label for="">Price</label>
                <input type="number" name="price" class="form-control" required>
              </div>

              <div>
                <label>Room Type</label>
              <select name="room_type" id="" class="form-control" required>
                <option selected value="regular">Regular</option>
                <option value="premium">Premium</option>
                <option value="delux">Delux</option>
              </select>
              </div>


              <div>
                <label>Free WiFi</label>
              <select name="wifi" id="" class="form-control" required>
                <option selected value="yes">Yes</option>
                <option value="no">No</option>
              </select>
              </div>

              <div>
                <label for="">Upload Image</label>
                <input type="file" name="image" class="form-control">
              </div>

              <div>
                <input class="btn btn-primary" type="submit" value="Add Room"> 
              </div>

            </form>
          </div>

          </div>
        </div>
      </div>

      @include('admin.footer')
  </body>
</html>