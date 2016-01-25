
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
			@endif
