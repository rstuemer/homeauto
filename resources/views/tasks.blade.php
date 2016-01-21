@extends('layouts.app')

@section('content')

		<div class="row-fluid">
			<div class=" box span4 ">
				<div class="box-header">
					<h2>	<i class="halflings-icon black list"></i> <span class="break"></span> Tasks</h2>
				</div>

				<div class="box-content">
					<!-- Current Tasks -->
			@if (count($tasks) > 0)
						<ul class="dashboard-list metro">
								@foreach ($tasks as $task)
									<li>
										<a href="#" class="table-text">
											<i class="icon-arrow-up green"></i>
											{{ $task->name }}
										</a>
										<!-- Task Delete Button -->
									</li>
								@endforeach
						</ul>
					</div>
				</div>
			@endif
		</div>
		</div>
@endsection
