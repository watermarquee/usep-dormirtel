@extends('admin.master')
@section('content')

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Latest Reservations</h1>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Reservation ID</th>
							<th>Client</th>
							<th>Room Type</th>
							<th>Room No.</th>
							<th>Rental Time</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

					@foreach($reservations as $reservation)
						<tr>
							<td>{{ $reservation->person->getUNiqueID() }}</td>
							<td>{{ $reservation->person->getFullName() }}</td>
							<td>{{ $reservation->room->type }}</td>
							<td>{{ $reservation->room->name }}</td>
							<td>{{ $reservation->start_date }} — {{ $reservation->end_date }}</td>
							<td>{{ $reservation->status }}</td>
							<td>
								<a class="btn btn-success btn-xs" href="{{action('ReservationController@confirm', $reservation->id)}}" role="button">Confirm</a>
								<a class="btn btn-danger btn-xs" href="{{action('ReservationController@cancelled', $reservation->id)}}" role="button">Decline</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</p>
		<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide Menu</a>
	</div>
</div>
</div>
</div>
@stop