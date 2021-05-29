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
                <h3>News & Events List
                <a class="btn btn-success float-right btn-sm"href="{{route('news_events.add')}}"><i class="fa fa-plus-circle"></i> Add News & Events</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Date</th>
                            <th>Image</th>
                            <th>Short Title</th>
                            <th>Long Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allData as $key => $news)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ date('d-m-Y', strtotime($news->date)) }}</td>
                            <td><img src="{{(!empty($news->image)) ? url('public/upload/news_images/'.$news->image) : url('public/upload/no-image.png')}}" alt="" width="100px" height="100px">
                            </td>
                            <td>{{ $news->short_title }}</td>
                            <td>{{ $news->long_title }}</td>
                            <td>
                                <a title="Edit" class="btn btn-secondary btn-sm" href="{{route('news_events.edit', $news->id)}}"><i class="fa fa-edit"></i></a>
                                <a title="Delete" id="delete" class="btn btn-danger btn-sm" href="{{route('news_events.delete', $news->id)}}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
  <!-- /.content-wrapper -->

  @endsection