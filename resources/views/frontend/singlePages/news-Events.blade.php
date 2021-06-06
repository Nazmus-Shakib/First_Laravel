@extends('frontend.layouts.master')
@section('content')

	<!-- Banner Section -->
	<section class="banner_part">
		<img src="{{ asset('public/frontend/image/banner.jpg')}}" style="width: 100%">
	</section>

    <!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 3px solid #000;width: 90%">News and Events</h3>
				</div>
				<div class="col-md-9" style="padding-top: 15px;">					
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>Image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($newsEvents as $key => $newsEvent)
							<tr>
								<td>{{$key + 1}}</td>
								<td style="width: 15%">{{date('d-m-Y', strtotime($newsEvent->date))}}</td>
								<td><img src="{{asset('public/upload/news_images/'.$newsEvent->image)}}"></td>
								<td>{{$newsEvent->short_title}}</td>
								<td><a href="{{route('news.event.details', $newsEvent->id)}}" class="btn btn-info">Details</a></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

@endsection