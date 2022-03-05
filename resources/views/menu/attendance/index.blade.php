@extends('layouts.master')
@section('content')

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="col-sm-6">
        <h1>Attendance</h1>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Attendance </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped  table-hover data-table">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Username</th>
                      <th>Training Session</th>
                      <th>Date / Time</th>

                      <th>GYM</th> <!-- CITY MANAGER AND ADMIN ONLY -->
                      <th>CITY</th> <!-- ADMIN ONLY -->
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>


<script>
  $(function() {

    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('attendance.index') }}",
      columns: [{
          data: 'gym_member_id',
          name: 'gym_member_id'
        },
        {
          data: 'gym_member_name',
          name: 'gym_member_name'
        },
        {
          data: 'training_session_name',
          name: 'training_session_name'
        },
        {
          data: 'training_session_starts_at',
          name: 'training_session_starts_at'
        },
        {
          data: 'gym_name',                 // <!-- CITY MANAGER AND ADMIN ONLY -->
          name: 'gym_name'
        },
        {
          data: 'city',                 // <!-- ADMIN ONLY -->
          name: 'city'
        },

      ],

      success: function(response) {
        console.log(response);
      }


    });


  });
</script>
@endsection