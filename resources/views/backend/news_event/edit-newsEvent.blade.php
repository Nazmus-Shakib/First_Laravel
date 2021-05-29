@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage News & Events</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">News & Events</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3> Edit News & Events
                <a class="btn btn-primary float-right btn-sm"href="{{route('news_events.view')}}"><i class="fa fa-list"></i> News & Events List</a>
                </h3>
              </div><!-- /.card-header -->

                <div class="card-body">
                    <form method="post" action="{{ route('news_events.update', $editData->id) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="date">Date</label>
                                <input type="text" id="datepicker" name="date" class="form-control" placeholder="YYYY-MM-DD" value="{{$editData->date}}" readonly>
                            </div>

                            <div class="form-group col-md-8">
                                <label for="short_title">Short Title</label>
                                <input type="text" name="short_title" value="{{$editData->short_title}}" class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="long_title">Long Title</label>
                                <textarea name="long_title" class="form-control" id="long_title" rows="5">{{$editData->long_title}}</textarea>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <div class="form-group col-md-2">
                                <img src="{{(!empty($editData->image)) ? url('public/upload/news_images/'.$editData->image) : url('public/upload/no-image.png')}}" alt="" style="width: 150px; height: 160px; border: 1px solid black;" id="showImage">
                            </div>

                            <div class="form-group col-md-2" style="padding-top: 50px">
                                <input type="submit" value="Update" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
              </div><!-- /.card-body -->
            </div>

            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
  <!-- /.content-wrapper -->

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4', 
            format: 'yyyy-mm-dd'
        });
    </script>

  @endsection